<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function insertProduct(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->save();

        return response()->json([
            "status" => 1,
            "msg" => "¡El producto $product->product_name ha sido registrado correctamente!",
        ]);
    }

    public function readProduct()
    {
       
        Product::select();
    }
}
