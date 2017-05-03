<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ArticleUserController extends Controller
{
    public function index($userId)
    {
        $user = User::find($userId);
        $articles = $user->articles;

        return view('articles.index', compact('articles'));
    }
}
