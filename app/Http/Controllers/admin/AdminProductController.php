<?php

namespace App\Http\Controllers\admin;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin/pages/product',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getadd()
    {
        // return view('admin/pages/add_category_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postadd(Request $request)
    {
        // $category = new Category();
        // $category->name=$request->name;
        // $category->detail=$request->detail;
        // if($category->save()) {
        //     return redirect()->route('categoryadmin');
        // } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data =Category::find($id);
        // return view('admin/pages/edit_category',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $category = Category::find($id);
        // $category->name=$request->name;
        // $category->detail=$request->detail;
        // if($category->save()){
        //     return redirect()->back()->with('success',__('Edit category success'));
        // } else {
        //     return redirect()->back()->withErrors('edit category error');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('productadmin');
    }
}
