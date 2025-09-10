<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\GitHubController;

class GitHubCards extends Component
{
    public function render()
    {
        $username = env('GITHUB_USERNAME');
        $token = env('GITHUB_TOKEN');

        $response = Http::withToken($token)
            ->get("https://api.github.com/users/{$username}/repos");

        $repos = $response->successful() ? $response->json() : [];

        
        return view('livewire.git-hub-cards', compact('repos'));
    }
}
