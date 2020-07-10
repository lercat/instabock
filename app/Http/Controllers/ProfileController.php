<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $username)
    {
        dd($username);
        return view('profiles.show');
    }
}
