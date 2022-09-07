<?php

namespace Database\Seeders;

use App\Models\TipoPerfil;
use Illuminate\Database\Seeder;


class TipoPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoPerfil::create([
            "descripcion" => "Administrador"
        ]);

        TipoPerfil::create([
            "descripcion" => "Agente"
        ]);
        TipoPerfil::create([
            "descripcion" => "Informante"
        ]);

    }
}
