<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clientes;
use App\Models\clientespedidos;
use App\Models\Pedidos;
class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        Clientes::factory(50)->create();
        Pedidos::factory(50)->create();
        clientespedidos::factory(50)->create();
    }
}
