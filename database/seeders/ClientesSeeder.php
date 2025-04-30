<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'Guilherme Souza',
                'email' => 'guigu_aguiar2@hotmail.com',
                'endereco' => 'rua januario da cunha barbosa',
                'logradouro'=> '91',
                'cep'=> '74450180',
                'bairro'=> 'capuava',
            ]
        );

        Cliente::create(
            [
                'nome' => 'Alos gal',
                'email' => 'nerormmm@hotmail.com',
                'endereco' => 'rua pascoal moreira',
                'logradouro'=> '105',
                'cep'=> '75148150',
                'bairro'=> 'candida de moraes',
            ]
        );
    }
}
