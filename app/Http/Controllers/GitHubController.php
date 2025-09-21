<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GitHubController extends Controller
{
    public function index()
    {
        $username = env('GITHUB_USERNAME');
        $token = env('GITHUB_TOKEN');

        $response = Http::withToken($token)
            ->get("https://api.github.com/users/{$username}/repos");

        $repos = $response->successful() ? $response->json() : [];

        
        return view('home', compact('repos'));
    }
}