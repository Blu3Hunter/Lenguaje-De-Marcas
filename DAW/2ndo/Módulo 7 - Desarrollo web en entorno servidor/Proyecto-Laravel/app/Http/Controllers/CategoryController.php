<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function insertCategory(Request $request)
    {
        $products = new Category();

        $products->category = $request->category;
        $products->save();

        return response()->json([ 
            "status" => 1,
            "msg" => "¡La categoria $products->category ha sido registrada correctamente!",
        ]);
    }

    public function readCategory(Request $request)

    {

        $products = new Category();
        $products->category = $request->category;

        return Category::where('category', '=', $products->category)->get();

    }

    public function updateCategory(Request $request)
    {
        $products = new Category();

        $products->category = $request->category;
        $products = Category::find($products->id);
        $products->update([
        
            'category' => $request->category,

        ]);
        
        return response()->json([
            "status" => 1,
            "msg" => "¡El producto $products->product_name ha sido modificado correctamente!",
        ]);
    }

    public function deleteCategory(Request $request)
    {
        $products = new Category();
        $products->id = $request->id;
        if ($products = Category::find($products)) return Products::destroy($products);
    }
    
}
