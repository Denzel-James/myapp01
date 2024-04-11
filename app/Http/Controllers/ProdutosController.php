<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProdutosController extends Controller
{
    //
    public function index(){
        $produtos = Produtos::all();
        return view('Produtos',compact('produtos'));
    }
    public function show()
    {
        return view('form2');
    }
    public function store(Request $request){
        //dd($request->all());

        $input = $request->validate([
           'nome' => 'required|string',
            'cat' => 'required|string',
            'quant' => 'required|integer',
            'preco' => 'required|numeric',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'data_fab'=>'required|date',
            'data_exp'=>'required|date',
        ]);
        $file = $input['imagem'];
        $path = $file->store('imagem','public');
        $input['imagem'] = $path;
        Produtos::create($input);
        return Redirect::route('produtos.index');

        //dd($path);
    }
    public function edit($id){
        return view('form2');
    }
}
