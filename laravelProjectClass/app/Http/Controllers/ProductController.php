<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    function getProducts() {
        $products = ProductModel::all();
        return view('admin.product.getProducts', ['products' => $products]);
    }

    function getProductsByBand(Request $request) //request
    {
        $band = $request->input('SelectBand');
        //'band': band trong co so du lieu, where chinh la sql command
        $products = ProductModel::where('band',$band)->get();
        return view('admin.product.getProductsByBand',['products'=>$products]);
    }

    function getProductsByName(Request $request) //request
    {
        $pname = $request->input('SelectName');
        //'band': band trong co so du lieu, where chinh la sql command
        $products = ProductModel::where('pname',$pname)->get();
        return view('admin.product.getProductsByName',['products'=>$products]);
    }

    function getProductsByYear(Request $request) //request
    {
        $year = $request->input('SelectYear');
        //'band': band trong co so du lieu, where chinh la sql command
        $products = ProductModel::where('year',$year)->get();
        return view('admin.product.getProductsByYear',['products'=>$products]);
    }


    function forminsertProduct(){
        return view('admin.product.insertProduct');
    }
    function insertProduct(Request $request){
        $product = new ProductModel;
        $product->pid = $request->id;
        $product->pname = $request->pname;
        $product->company = $request->company;
        $product->band = $request->selectBand;
        $product->year = $request->selectYear;

        if(isset($_FILES['imageFile']) && $_FILES['imageFile']['error'] === UPLOAD_ERR_OK) {
            $pimage = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES['imageFile']['tmp_name']));
            $product->pimage = $pimage;
        }
        $product->save();
        return redirect('admin/product/insertProduct')->with("Note","thêm thành công");
    }
    
    function deleteProduct($pid){
        $product = ProductModel::where('pid',$pid)->first();
        $product->delete();
        return redirect('admin/product/getProductsByBand')->with("Note","cóa thành công!");
    }

}
