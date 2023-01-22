<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Products;

/**
 * Este es el controlador principal de la aplicación.
 */


class AdminController extends Controller
{
    /**
     * Función para ver la categoria. Nos devolverá la vista
     */
    public function view_category()
    {
        $data = Category::all();

        return view('admin.category', compact('data'));
    }

    /**
     * Función para añadir más categorias.
     */
    public function add_category(Request $request)
    {

        $data = new Category;

        $data->category_name = $request->category;

        $data->save();

        return redirect()->back()->with('message', '¡Categoria añadida correctamente!');
    }
    /**
     * Función para borrar categorias
     */
    public function delete_category($id)
    {

        $data = Category::find($id);

        $data->delete();

        return redirect()->back()->with('message', '¡Categoria borrada correctamente!');
    }

    /**
     * Función para ver los productos y la categoria. Nos devolverá la vista
     */

    public function view_product()
    {
        $category = Category::all();
        return view('admin.product', compact('category'));
    }

    /**
     * Función para añadir más productos.
     */

    public function add_product(Request $request)
    {
        $product = new Products;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;

        $product->save();
        return redirect()->back()->with('message', '¡Producto añadido correctamente!');
    }
    /**
     * Función para ver los productos. Nos devolverá la vista
     */

    public function show_product()
    {
        $product = Products::all();
        return view('admin.show_product', compact('product'));
    }

    /**
     * Función para borrar los productos.
     */

    public function delete_product($id)
    {
        $product = Products::find($id);


        $product->delete();

        return redirect()->back()->with('message', '¡Producto borrado correctamente!');
    }

    /**
     * Función para editar los productos.
     */
    public function update_product($id)
    {
        $product = Products::find($id);
        return view('admin.update_product', compact('product'));
    }
}
