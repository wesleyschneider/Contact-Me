<?php

use App\User;
use Illuminate\Database\Seeder;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Wesley Schneider Aires', 'email'=>'wesleyschneideraires@gmail.com', 'password'=>Hash::make('admin')]);
    }
}
