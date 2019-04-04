<?php

use Illuminate\Database\Seeder;
use App\Tienda;

class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tienda::create([
          'nombre' => 'KANDONGA',
          'telefono' => '52639856',
          'direccion' => 'Avenida Misiones 258, La Habana, Cuba'
        ]);
    }
}
