<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa;
class EmpresaSeeder extends Seeder
{
    public function run()
{
    $empresas = [
        'CEB HOLDING',
        'CEB IPES',
        'CEB Geração S.A.',
        'CEB Participações S.A.',
        'CEB Lajeado S.A.'
    ];

    foreach ($empresas as $nome) {
        Empresa::create(['nome' => $nome]);
    }
}
}
