<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
//use Illuminate\Http\Request; se reemplaza este request por que el que recibira las llaves sera el siguiente:
use App\Http\Requests\PostRequest;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();

        //post.index-->es la capeta post/index
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * Esto significa que esta sera la vista para crear formularios
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        
        //guardar
        $post = Post::create([
            'user_id' => auth()->user()->id
        ] + $request->all());

        //image
        if($request->file('file')) {
            //guarda la ruta de la imagen y crea la carpeta en storange/public/posts
            $post->image = $request->file('file')->store('posts','public');

            //guarda el dato en bd
            $post->save();
        }

        //retornar 
        return back()->with('status','Creado con éxito');
    }

    /**
     * Display the specified resource.
     * 
     * Seexecptua su uso en web.php
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {

        //dd($request->all());
        $post->update($request->all());

        //si trae la imagen
        if($request->file('file')){

            //eliminar imagen
            Storage::disk('public')->delete($post->image);

            $post->image = $request->file('file')->store('posts','public');
            $post->save();
        }

        return back()->with('status','Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //eliminacion de una imagen
        Storage::disk('public')->delete($post->image);
        //eliminar post
        $post->delete();

        return back()->with('status','Eliminado con exito');
    }
}
