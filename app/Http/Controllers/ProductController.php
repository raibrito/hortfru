<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    public function index(Request $request){
        $data = [];
        $productsList = Product::all();
        $data['list'] = $productsList;

        return view('home', $data);
    }

    public function category($idcategory = 0, Request $request){
        $data = [];

        $categoryList = Category::all();

        $queryProduct = Product::limit(4);

        if($idcategory != 0){
            $queryProduct->where("category_id", $idcategory);
        }
        $productList = $queryProduct->get();

        $data['list'] = $productList;
        $data['listCategory'] = $categoryList;
        $data['idcategory'] = $idcategory;

        return view('category', $data);
    }

    public function addCart($idproduct = 0, Request $request){
        $products = Product::find($idproduct);
        if($products){
            $cart = session('cart', []);

            array_push($cart, $products);
            session(['cart'=>$cart]);
        }
        return redirect()->route('home');
    }

    public function viewCart(Request $request){
        $cart = session('cart', []);
        $data = [ 'cart'=>$cart];

        return view('cart', $data);
    }

    public function cartDelete($index, Request $request){
        $cart = session('cart', []);
        if(isset($cart[$index])){
            unset($cart[$index]);
        }
        session(['cart'=>$cart]);
        return redirect()->route('view_cart');
    }

}
