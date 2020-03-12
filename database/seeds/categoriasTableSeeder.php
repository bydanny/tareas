<?php

use Illuminate\Support\Facades\DB;
use App\categoria;
use Illuminate\Database\Seeder;

class categoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('categorias')
            ->insert(['nombre_categoria' => 'personal']);
        \DB::table('categorias')
          ->insert(['nombre_categoria' => 'escuela']);
        //$categoria = new categoria();
        //$categoria->nombre_categoria = ''
        categoria::create(['nombre_categoria' => 'personal']);
        categoria::create(['nombre_categoria' => 'escuela']);
        categoria::create(['nombre_categoria' => 'trabajo']); //, ['nombre_categoria' => 'diversion']);//
        //[ ]
    }
}
