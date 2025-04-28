<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create(
            [
                'nome' => 'Guilherme Souza',
                'valor' => '20.00'
            ]
        );

        Produto::create(
            [
                'nome' => 'Teste',
                'valor' => '23.00'
            ]
        );
    }
}
