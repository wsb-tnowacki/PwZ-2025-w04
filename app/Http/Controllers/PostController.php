<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "index";

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //return 'store';
        $request->validate([
            'tytul' => 'required|min:3|max:200',
            'autor' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:200|email:rfc,dns',
            'tresc' => ['required','min:5']
        ]);
        $post = new Post();
        $post->create($request->all());
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    //public function show(string $post)
    {
        //
        echo $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
