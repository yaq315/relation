<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class postcontrollers extends Controller
{
    public function index(){
        $posts=Post::findOrFail(1);
        return $posts->users ;
    }
}
