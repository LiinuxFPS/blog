<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //popular o banco de dados
        //Fazer a chamada no DatabaseSeeder

        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        //popular com metodo create->tem que usar atributo 'protected $fillable', os campos do Model;
        Fornecedor::created([
            'nome'=> 'Fornecedor 200',
            'uf'=> 'RS',
            'email'=> 'contato@fornecedor200.com.br'
        ]);

        //insert
        DB::table('fornecedors')->insert([
            'nome'=> 'Fornecedor 300',
            'uf'=> 'SP',
            'email'=> 'contato@fornecedor.com.br'
        ]);
    }
}
