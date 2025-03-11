<?php

namespace App\Http\Controllers;
use App\Models\phone;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserControllers extends Controller
{
    public function index () {
        $users= User::findOrFail(2);
        return  $users->phones();
    }
}
