<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

            $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1200, 1200);
            $image->save();

            auth()->user()->posts()->create([
                'legende' => $data['legende'],
                'description' => $data['description'],
                'categorie' => $data['categorie'],
                'image' => $imagePath
            ]);

            return redirect()->route('profiles.show', ['user' => auth()->user()]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
