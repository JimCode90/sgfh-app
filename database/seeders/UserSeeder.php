<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'grado' => 'CAP',
            'nombres' => 'MARCOS',
            'apellidos' => 'LOPEZ CARRION',
            'cip' => '352565',
            'dni' => '46585896',
            'id_tipo_perfil' => 1,
            'email' => 'admin@correo.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);

        User::create([
            'grado' => 'CAP',
            'nombres' => 'JOSE',
            'apellidos' => 'MARTINEZ LOPEZ',
            'cip' => '356585',
            'dni' => '47588454',
            'id_tipo_perfil' => 2,
            'email' => 'agente@correo.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);
    }
}
