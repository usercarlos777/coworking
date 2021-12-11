<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Blog;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bienes     = Product::paginate(20)->where('type', "=", "Producto");
        $servicios  = Product::paginate(20)->where('type', "=", "Servicio");
        return view('coworking.front.home', compact('bienes', 'servicios'));
    }

    public function help()
    {
        return view('coworking.front.help');
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('coworking.front.blog', compact('blogs'));
    }
    public function showBlog($id)
    {
        $blog = Blog::find($id);
        $blogs = Blog::all();
        return view('coworking.front.blog_page', compact('blog', 'blogs'));
    }
    public function change()
    {
        return view('coworking.front.change');
    }
    public function changeview()
    {
        return view('coworking.front.change_page');
    }
    public function blogView()
    {
        return view('coworking.front.blog_page');
    }

    // Funciones  de  Perfil  de  Usuario

    public function userPerfil()
    {
        return view('coworking.front.user_perfil');
    }
}
