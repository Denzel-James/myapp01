<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //

    public function show($id){
        /*
        $users = User::all();
        return view('users', ['users' => $users]);
        */
        //dd($user);
        $user = User::find($id);
        $user->posts()->create([
           'title'=>'oi',
           'content'=>'ola',
        ]);
        dd($user);
    }
    public function create(User $user){
        /*
        $users = User::create([
            'name'=> 'Mateus',
            'email'=> 'mateus@gmail.com',
            'password'=> bcrypt('mateus')
        ]);
        */
        //return $id;
        //$user = User::all();
        //dd($id);

        //$user->save();
        //dd($user->posts);
    }
    public function edit($id){
        //return "edit id:".$id;
        $user = User::find($id);
        $user->name = 'Miguel';
        $user->email = 'Miguel@gmail.com';
        $user->save();
        return $this->show();
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return $this->show();
    }
}
