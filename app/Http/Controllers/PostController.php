<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* return "index"; */
        $posty = Post::paginate(5);
        return view('post.lista',compact('posty'));
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
    public function store(PostStoreRequest $request)
    {
        /* $request->validate([
            'tytul' => 'required|min:3|max:200',
            'autor' => 'required|min:4|max:100',
            'email' => ['required','min:3','max:200','email:dns,rfc'],
            'tresc' => 'required|min:5'
        ]); */
        $post = new Post();
        /* $post->tytul = request('tytul');
        $post->autor = request('autor');
        $post->email = request('email');
        $post->tresc = request('tresc');
        $post->save(); */
        $post->create($request->all());
        return redirect()->route('post.index')->with('message',"Poprawnie dodano post");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    //public function show(string $post)
    {
        //return "show - post: $post";
        return view('post.pokaz',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
       //return "edit - post: $post";
       return view('post.edytuj',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostStoreRequest $request, Post $post)
    {
        //return "update - post: $post";
        $post->update($request->all());
        return redirect()->route('post.index')->with('message',"Poprawnie zmieniono post");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //return "destroy - post: $post";
        $post->delete();
        return redirect()->route('post.index')->with('message',"Poprawnie usunięto post")->with('class','danger');
    }
}
