<?php

namespace App\Http\Controllers\admin;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::paginate(10);
        return view('admin/pages/product', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getadd()
    {
        $categories = Category::all();
        return view('admin/pages/add_product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function postadd(Request $request)
    {
//        dd($request->file('images'));
//        dd(public_path());
        $this->validate(request(), [
            'name' => 'required',
            'images' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'amount' => 'required|numeric|min:0',
        ]);

        $data = $request->except('_token', 'images');
        $product = Product::create($data);
        $i = 1;
        foreach ($request->images as $image) {

            $format = explode(".", $image->getClientOriginalName())[1];

            $file_name = $product->id . '_' . $i . '.' . $format;
            $path = '/assets/product_images/';
            Storage::disk('public')->putFileAs($path, $image, $file_name);
            Image::create(['product_id' => $product->id, 'name' => $file_name]);
            $i += 1;
        }
        return redirect()->route('productadmin')->with('success', 'Thêm sách thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $data = Product::find($id);
        return view('admin/pages/edit_product', compact('data', 'categories'));
    }

    public function deleteProductImage($id)
    {
        $deleted = Image::destroy($id);
        return json_encode($deleted == 1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $this->validate(request(), [
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'amount' => 'required|numeric|min:0',
        ]);

        $data = $request->except('_token', 'images');

        $updated = $product->update($data);
        if($updated)
            $product->touch();


        $i = count($product->images) + 1;
        if($request->hasFile('images')){
            foreach ($request->images as $image) {

                $format = explode(".", $image->getClientOriginalName())[1];
    
                $file_name = $product->id . '_' . $i . '.' . $format;
                $path = '/assets/product_images/';
                Storage::disk('public')->putFileAs($path, $image, $file_name);
                Image::create(['product_id' => $product->id, 'name' => $file_name]);
                $i += 1;
            }
        }
    
        return redirect()->route('productGetedit', $id)->with('success', $updated ? 'Chỉnh sửa thành công' : 'Chỉnh sửa thất bại');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('productadmin');
    }
}
