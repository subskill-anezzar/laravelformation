<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $posts = [
            1 => 'Titre numero 1',
            2 => 'Titre numero 2',
            3 => 'Titre numero 3',
        ];
        $post = $posts[$id] ?? 'pas de titre';
        return view('post', [
            'post' => $post
        ]);
    }

    public function contact(){
        return view('contact');
    }
    public function index()
    {
        $posts = [
            'titre1',
            'titre2',
        ];

        return view('posts', compact('posts'));
    }
}
