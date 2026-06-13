<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categorias")->insert([
            [
                'nome'=>'Programação',
                'descricao'=>'Tudo sobre as linguagens de programação',
                'cor' => '#3b82f6'
            ],
            [
                'nome' => 'Inteligência Artificial',
                'descricao'=>null,
                'cor' => '#8b5cf6'
            ],
            [
                'nome' => 'Hardware',
                'descricao' => 'Tudo sobre manutenção de computador',
                'cor' => '#10b981'
            ],
            [
                'nome' => 'Cloud Computing',
                'descricao' => null,
                'cor' => '#f59e0b'
            ],
            [
                'nome' => 'Cibersegunça',
                'descricao' => null,
                'cor' => '#f59e0b'
            ]
        ]);
    }
}
