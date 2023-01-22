<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{

    /**
     * Devolvemos la vista de la página inicial.
     */
    public function index()

    {
        return view('home.userpage');
    }

    /**
     * Con esta función estamos haciendo que si la variable del usuario es igual
     * a 1, entonces es administrador, por ende, podrá acceder al admin panel. 
     * En caso contrario y que no sea administrador se le redireccionará a la página
     * inicial.
     */


    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            return view('home.userpage');
        }
    }
}
