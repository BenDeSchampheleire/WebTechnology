<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Mockery\Exception;

class ProductController extends Controller
{
    /*
    public function show($id)
    {
        $data = []; //to be sent to the view
        $listProducts = array();
        $listProducts[121] = array("name"=>"Tv samsung", "price"=>"1000");
        if (!key_exists($id, $listProducts)) {
            return redirect()->route('home.index');
        }

        $listOfSizes = array("XS","S","M","L","XL");
        $data["title"] = $listProducts[$id]["name"];
        $data["product"] = $listProducts[$id];
        $data["sizes"] = $listOfSizes;
        return view('product.show')->with("data",$data);
    }
    */

    public function show($id)
    {
        $data = []; //to be sent to the view
        try {
            $product = Product::query()->findOrFail($id);
        } catch (Exception) {
            return redirect()->route('home.index');
        }
        $listOfSizes = array("XS","S","M","L","XL");
        $data["title"] = $product->getName();
        $data["product"] = $product;
        $data["sizes"] = $listOfSizes;
        return view('product.show')->with("data",$data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";
        return view('product.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required | gt:0",
        ]);
        dd($request->all());
        //here goes the code to call the model and save it to the database
    }
}
