<?php
namespace App\Http\Controllers;
class ProductController extends Controller
{
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
}
