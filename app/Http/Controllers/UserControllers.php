<?php

namespace App\Http\Controllers;
use App\Models\phone;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserControllers extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));

    }
    public function create(){
    return view('users.create');
    }
    public function store(Request $request){
        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$request->password,
         

        ]);
        return redirect( 'users');
    }
    public function show($id){
$users = User::findOrFail($id);
return view('users.show',compact('users'));
    }
    public function edit($id){
        $users = User::findOrFail($id);
        return view('users.edit',compact('users'));
    }
    public function update(Request $request,$id){
        $users = User::findOrFail($id);
        $users=user::update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
           
        ]);
        
        return redirect('users');
    }
    public function destroy($id){
        $users = User::findOrFail($id);
        $users->delete();
        return redirect( 'users');
    }



}

