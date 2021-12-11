<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\News;
=======

>>>>>>> adicionar modelo de noticias
class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $news = News::all();
        return view('coworking.bakent.news.index', compact('news'));
=======
        //
>>>>>>> adicionar modelo de noticias
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('coworking.bakent.news.create');
=======
        //
>>>>>>> adicionar modelo de noticias
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $fields = $request->all();
        $v= Validator::make($request->all(),[
            'title' => 'required|string',
            'content' => 'required|string',
            'abstract' => 'required|string'
        ]);
        if($v && $v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $new = News::createDataWithMedia($fields,'news');
        if ($new)
        {
            Session::flash('flash_message', 'Se ha creado una nueva noticia');
            Session::flash('flash_message_type', 'success');
        }
        else
        {
            Session::flash('flash_message', 'Hubo un error al crear la noticia');
            Session::flash('flash_message_type', 'success');
        }
        return redirect('admin/noticias');
=======
        //
>>>>>>> adicionar modelo de noticias
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $new = News::find($id);
        return view('coworking.bakent.news.update', compact('new'));
=======
        //
>>>>>>> adicionar modelo de noticias
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD

        $new = News::find($id);
        $fields = $request->all();

        $v= Validator::make($request->all(),[
            'title' => 'required|string',
            'content' => 'required|string',
            'abstract' => 'required|string'
        ]);
        if($v && $v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        News::updateDataWithMedia($id,$fields,'news');

        Session::flash('flash_message', 'Se ha actualizado la noticia');
        Session::flash('flash_message_type', 'success');

        return redirect('admin/noticias');
=======
        //
>>>>>>> adicionar modelo de noticias
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        $new = News::findOrFail($id);
        if ($new) {
            deleteImage($new->url_img,'news_images');
            $new->delete();
            Session::flash('flash_message', '¡Noticia Eliminada!');
            Session::flash('flash_message_type', 'success');
        } else {
            Session::flash('flash_message', 'la noticia no pudo ser eliminado.');
            Session::flash('flash_message_type', 'warning');
        }
        return redirect('admin/noticias');
=======
        //
>>>>>>> adicionar modelo de noticias
    }
}
