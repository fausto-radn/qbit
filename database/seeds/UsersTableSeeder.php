<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
          'tienda_id' => 1,
          'nombre' => 'admin',
          'email' => 'admin@admin.com',
          'password' => bcrypt('admin123')
        ]);
    }
}
