<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Session::get('user');
        
        if($user) {
        $id_user = $user->id;
        $infoUser = DB::select('select * from users where id = ?', [$id_user]);
        return view('shop.pages.checkout',compact('infoUser'),compact('id_user'));
        } else {
            return Redirect::to('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Session::get('user');
        $id_user = $user->id;
        $paymentName = $request->redirect;
        $address = $request->street_address.', '. $request->city;
        Session::put('address',$address);
        Session::save();
        if($paymentName == 1) {
            $data = array();
            $data['user_id'] = $id_user;
            $data['payment_id'] = $request->redirect;
            $data['address'] = $address;
            $data['status'] = 0;
            $data['payment_status'] = 0;
            $result = Order::create($data);
            //print_r($data);
            // exit;
            if($result) {
                $order_id = DB::table('orders')->select('id')->orderby('id', 'desc')->first();
                //dd($order_id);
                $giohang = Session::get('cart');  
                // $giohang = $giohang[0];
                //print_r($order_id->id);
                //dd($giohang);
                foreach($giohang as $key => $value) {                 
                    $item = array();
                    $item['order_id'] = $order_id->id;
                    $item['product_id'] = $value['product_id'];
                    $item['quantity'] = $value['product_qty'];
                    // dd($item);
                    $result = OrderProduct::create($item);
                }
                $request->session()->forget('cart');
                Session::put('success_checkout','Đặt hàng thành công');
                return Redirect::to('/order');
            } else {
                Session::put('fail', '<script type="text/javascript">alert("Error!");</script>');
            }
        } else {
            $code_cart = rand(00,9999);
            $data = $request->all();        
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://127.0.0.1:8000/return_vnpay";
            $vnp_TmnCode = "UKJR71FP";//Mã website tại VNPAY 
            $vnp_HashSecret = "SXJJELHXCQJPHONDYAOJJHEVLRULVCZK"; //Chuỗi bí mật
            
            $vnp_TxnRef =  $code_cart; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = 'Thanh toán online';
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $data['total'] * 100;
            $vnp_Locale = 'vn';
            $vnp_BankCode ='NCB';
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
            //Add Params of 2.0.1 Version
            // $vnp_ExpireDate = $_POST['txtexpire'];
            //Billing
            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
            );
            
            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            }
            
            //var_dump($inputData);
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }
            
            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array('code' => '00'
                , 'message' => 'success'
                , 'data' => $vnp_Url);
                if (isset($_POST['redirect'])) {
                    header('Location: ' . $vnp_Url);
                    die();
                } else {
                    echo json_encode($returnData);
                }
        }
        
    }
    public function return_vnpay(Request $request) {
        if($request->vnp_ResponseCode == "00") {
            $user = Session::get('user');
            $id_user = $user->id;
            $address = Session::get('address');
            $data = $request->all();        
            $data = array();
            $data['user_id'] = $id_user;
            $data['payment_id'] = 2;
            $data['address'] = $address;
            $data['status'] = 0;
            $data['payment_status'] = 1;
            $result = Order::create($data);
            // print_r($data);
            // exit;
            if($result) {
                $order_id = DB::table('orders')->select('id')->orderby('id', 'desc')->first();
                $giohang = Session::get('cart');  
                foreach($giohang as $key => $value) {                 
                    $item = array();
                    $item['order_id'] = $order_id->id;
                    $item['product_id'] = $value['product_id'];
                    $item['quantity'] = $value['product_qty'];
                    //dd($item);
                    $result = OrderProduct::create($item);
                }
                $request->session()->forget('cart');
                Session::put('success_checkout','Thanh toán thành công');
                return Redirect::to('/order');
            } else {
                Session::put('fail', '<script type="text/javascript">alert("Error!");</script>');
            }
        }
       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
    
}