<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    public function show (){
        $cidades = Cidade::get();
       
        return view('cidade',['cidades'=>$cidades]);
    }
    
    public function index(){
        return view('cadastro-cidade');
    }

    public function edit($id){
        $cidade = Cidade::find($id);
        return view('cadastro-cidade',['cidade'=>$cidade]);
    }

    public function update(Request $request,$id){
        $cidade = Cidade::find($id);
        $cidade->nome = $request->input('nome');
        $cidade->save();
        return redirect()->route('cidade.lista');
    }

    public function create(Request $request){
        $cidade = new Cidade();
        $cidade->nome = $request->input('nome');
        $cidade->save();
        return redirect()->route('cidade.lista');
    }
    
    public function delete($id){
        $cidade = Cidade::find($id);
        $cidade->delete();
        return redirect()->route('cidade.lista');
    }
    
}
