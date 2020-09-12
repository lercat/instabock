<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'titre' => 'required',
            'presentation' => 'required',
            'url' => 'required|url',
            // 'image' => ['required','mimes:jpeg,png,bmp'],
        ]);

        auth()->user()->profile->update($data);

        return redirect()->route('profiles.show', ['user' => $user]);
    }
}
