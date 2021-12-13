<?php

namespace App\Http\Controllers;

use App\Blog;
use App\News;
use App\User;
use App\Product;
use App\QuestionAndAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
        $questions = QuestionAndAnswer::all();
        return view('coworking.front.help', compact('questions'));
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
    // Funciones  de  Perfil  de  Usuario

    public function userPerfil()
    {
        $news = News::all();
        return view('coworking.front.user_perfil', compact('news'));
    }

    public function updateUser(Request $request, $id)
    {

        /*
        TODO:
          revisar  el update  desde las vistas con la multi coneccion de basede datos
        */
        $user = User::find($id);
        $fields = $request->all();

        $v = Validator::make($request->all(), [
            'name' => 'required|string',
            'name2' => 'required|string',
            'surname' => 'required|string',
            'surname2' => 'required|string',
        ]);
        if ($v && $v->fails()) {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        User::updateDataWithMedia($id, $fields, 'user');

        Session::flash('flash_message', 'Se ha actualizado el Usuario');
        Session::flash('flash_message_type', 'success');

        return redirect('/');
    }
}
