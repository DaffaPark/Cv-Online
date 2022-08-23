<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

        public function store(Request $request)
        {
            $post = Post::create($request->all());
         
            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotopost/', $request->file('foto')->getClientOriginalName());
                $post->foto = $request->file('foto')->getClientOriginalName();
                $post->save();
            }
    
         
            return redirect('/posts')->with('Sukses','Post Berhasil Ditambahkan');
        }
    

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotopost/', $request->file('foto')->getClientOriginalName());
            $post->foto = $request->file('foto')->getClientOriginalName();
            $post->save();
        }else{
            unset($input['image']);
        }
          
        $post->update($input);
    
        return redirect('/posts')->with('Sukses','Data Berhasil Diedit');
    }
    

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('success','Post deleted successfully!');
    }
}