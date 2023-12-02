<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Message;

class AdminController extends Controller
{
    public function tableau()
    {
        $nmbUser = User::count();
        $nmbPost = Post::count();
        $nmbCategorie = Categorie::count();
        $nmbMessage = Message::count();

        return view('admin.users.tableau', compact('nmbUser', 'nmbPost', 'nmbCategorie', 'nmbMessage'));

    }
}
