<?php

use App\Fornecedor;
use App\SiteContato;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(FornecedorSeeder::class);

        //php artisan db:seed --class=SiteContatoSeeder
        $this->call(SiteContatoSeeder::class);
    }
}
