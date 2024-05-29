<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(){
        $products = ProductModel::orderBy('ID')->get();
        return view('admin.product.getProducts',
        ['products'=>$products]
    );}

    function getProductsbyBand(Request $request ){
        $gender = $request->input('selectgender');
        $products = ProductModel::where('gender', $gender)->get();
        return view('admin.product.getProductsByBand', ['products'=>$products]);
    }
    
    function forminsertProduct(){
        return view('admin.product.insertProduct');
    }

    function insertProduct(Request $request){
        $product = new ProductModel;
        $product->id = $request->id;
        $product->name = $request->name;
        $product->gender = $request->selectgender;
        $product->duty = $request->duty;
        $product->daynum = $request->daynum;

        

        $product->save();
        return redirect('admin/product/getProduct')->with('Note',"Thêm thành công!");

    }

}
