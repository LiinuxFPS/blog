<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            0=> [
                'nome'=> 'Fornecedor 1',
                'status'=> 'N',
                'cnpj'=> '',
                'ddd'=> '12',
                'telefone'=> '0000-0000'
            ],
            1=> [
                'nome'=> 'Fornecedor 2',
                'status'=> 'S',
                'cnpj'=> '',
                'ddd'=> '85',
                'telefone'=> '0000-0000'
            ],
            2=> [
                'nome'=> 'Fornecedor 3',
                'status'=> 'N',
                'cnpj'=> '',
                'ddd'=> '35',
                'telefone'=> '0000-0000'
            ],
        ];
        //para @forelse
        //$fornecedores=[];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
