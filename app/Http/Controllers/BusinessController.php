<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BusinessController extends Controller
{
    //
    public function index(){
        $business = Business::all();
        return view('business',compact('business'));
    }
    public function create(){
        return view('form');
    }
    public function store(Request $request){
        $input = $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:255|string',
            'address' => 'max:255|string',
        ]);
        Business::create($input);

        return Redirect::route('business.index');
    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update(Request $request, $id){

    }
    public function destroy($id){
        return 'destroy';
    }
}
