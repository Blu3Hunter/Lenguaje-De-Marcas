<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function insertProduct(Request $request)
    {
        $products = new Products();
        $products->product_name = $request->product_name;
        $products->price = $request->price;
        $products->stock = $request->stock;
        $products->description = $request->description;
        $products->save();

        return response()->json([
            "status" => 1,
            "msg" => "¡El producto $products->product_name ha sido registrado correctamente!",
        ]);
    }

    public function readProduct(Request $request)

    {
        $products = new Products();
        $products->product_category = $request->category;

        return Products::where('category', '=', $products->product_category,)->get();
    }

    public function uploadProduct()
    {
        
    }



    public function deleteProduct(Request $request)
    {
        $products = new Products();
        $products->id = $request->id;
        if ($products = Products::find($products)) {
            return Products::destroy($products);
        }
        return 'no va >:(';
    }
}
