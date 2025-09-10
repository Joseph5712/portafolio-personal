<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GitHubController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
