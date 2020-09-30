<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //usuario creado de forma manual para realizar las pruebas el metodo create se herada de Eloquent
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'paul',
            'email' => 'i@admin.com',
            'password'=> bcrypt('123456')
        ]);

        //este factoy crea 24 post de prueba utilizando la clase post
        //El metodo statico factory de post es heredado de Eloquent(me parece)
        //El funcionamiento de factory esta definido en la ruta database/factories/PostFactory.php
        Post::factory()->count(24)->create();
    }
}
