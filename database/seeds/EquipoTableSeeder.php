<?php
use App\Equipo;
use Illuminate\Database\Seeder;

class EquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      App\Equipo::create(['nombre_equipo' => 'Pro. Internet']);
      App\Equipo::create(['nombre_equipo' => 'Base de Datos']);
    }
}
