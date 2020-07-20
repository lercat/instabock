<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'legende' => ['required', 'string'],
            'description' => ['required', 'string'],
            'categorie' => ['string'],
            'image' => ['required', 'image'],        
             ]);

            $imagePath = request('image')->store('uploads', 'public');

            auth()->user()->posts()->create([
                'legende' => $data['legende'],
                'description' => $data['description'],
                'categorie' => $data['categorie'],
                'image' => $imagePath
            ]);

            return redirect()->route('profiles.show', ['user' => auth()->user()]);
    }
}
