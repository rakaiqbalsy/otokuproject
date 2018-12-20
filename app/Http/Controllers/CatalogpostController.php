<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogpost;

class CatalogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:5',
            'content' => 'required',

        ]);
        
        $post = new Catalogpost;
        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        return back()->withInfo('Post Baru Berhasil dibuat..!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show single page
        $posts = Catalogpost::find($id);
        return view('catalog.show')->withPosts($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $posts = Catalogpost::find($id);
        return view('catalog.edit')->withPosts($posts);
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
        $request->validate([
            'title' => 'required|min:5',
            'content' => 'required',

        ]);
        
        $post = Catalogpost::find($id);
        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        return back()->withInfo('Post Baru Berhasil diedit..!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
