<?php

namespace Database\Seeders;

use App\Models\FuenteHumana;
use App\Models\TipoPerfil;
use App\Models\User;
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
        $this->call(TipoPerfilSeeder::class);
        $this->call(UserSeeder::class);
         User::factory(10)->create();
//         FuenteHumana::factory(20)->create();

    }
}
