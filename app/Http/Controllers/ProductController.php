<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function catalog()
    {
        $isAdminLoggined = session()->has('user');
        $products = Product::all();

        return view('catalog', ['products' => $products, 'isAdminLoggined' => $isAdminLoggined]);
    }

    public function about()
    {
        return view('about');
    }

    public function buy()
    {
        return view('buy');
    }

    public function catalogProducts($id)
    {
        $isAdminLoggined = session()->has('user');
        $products = Product::where('category_id', $id)->get();

        return view('catalog', ['products' => $products, 'isAdminLoggined' => $isAdminLoggined]);
    }

    public function getProduct($id)
    {
        $isAdminLoggined = session()->has('user');
        $product = Product::find($id);

        return view('good', ['product' => $product, 'isAdminLoggined' => $isAdminLoggined]);
    }

    public function add(Request $request)
    {
        $name = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = 'images/'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }

        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->img = $name ? $name : 'images/goods2.jpg';
        $product->save();

        return redirect('/catalog');
    }

    public function delete(Request $request)
    {
        Product::find($request->prod_id)->delete();

        return redirect('/catalog');
    }
}
