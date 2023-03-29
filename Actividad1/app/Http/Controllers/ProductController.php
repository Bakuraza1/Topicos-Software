<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;
use \Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /*
    public static $products = [
        ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=>"80"],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=>"150"],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=>"200"],
        ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=>"300"]
    ];
    */

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        //$viewData["products"] = ProductController::$products;
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View
    {
        /*
        if(count(ProductController::$products) < $id){
            return view('home.index');
        }
        */
        $viewData = [];
        //$product = ProductController::$products[$id-1];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] =  $product->getName()." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "price" => "required|integer|min:0"
        ]);

        //return view('product.success');
        //dd($request->all());\
        //here will be the code to call the model and save it to the database
        Product::create($request->only(["name","price"]));

        return back();

    }
}


