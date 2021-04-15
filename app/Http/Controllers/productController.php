<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;

class productController extends Controller
{
   public function getProducts()
    {
        $poducts = product::get();
        return response()->json($products);
    } 
    public function postProducts(Request $req)
    {
        $poducts = new product();

        $poducts->name=$req->name;
        $poducts->number=$req->number;
        $poducts->price=$req->price;


        $b=$poducts->save();

        if($b)
            return "Все акей";
           return"Не, акей";
    }
    public function deleteProducts(Request $req)
    {
        $poducts = phproduct::where("name", $req->name)->first();
        $poducts->delete();
        return response()->json("Товар удален");
    }
}
