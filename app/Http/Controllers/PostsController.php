<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Models\User;

class PostsController extends Controller
{
    //
    public function index(){
        //return view('posts.index');

    }
    public function show(Posts $posts){
        //return view('posts.show');
        //return Posts::all();
        //$posts = Posts::where('user_id', $id)->get();
        //return $posts->load('user');
        //dd($posts->user(2));
        return $posts->user;

        /*if(count($posts)){
            return $posts;
        }
        else{
            return "Nenhum post encontrado";
        }*/
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        return view('posts.store');
    }
    public function edit(){
        return view('posts.edit');
    }
    public function update(){
        return view('posts.update');
    }
    public function destroy(){
        return view('posts.destroy');
    }
}
