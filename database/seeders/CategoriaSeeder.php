<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


public function run()
{
    $categorias = [
        'Conheça a Lei de Acesso à Informação',
        'Institucional',
        'Ações e Programas',
        'Auditorias',
        'Convênios',
        'Despesas',
        'Licitações e Contratos',
        'Execução de Contratos',
        'Empregados',
        'Informações Classificadas',
        'Perguntas Frequentes',
        'Serviço de Informação ao Cidadão - SIC'
    ];

    foreach ($categorias as $nome) {
        Categoria::create(['nome' => $nome]);
    }
}
}