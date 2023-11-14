<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new Client;

        $client -> name = "Pedro";
        $client -> lastname = "Medina";
        $client -> email = "zxcvvb@gmail.com";
        $client -> password = "1233";
        
        \App\Models\Client::factory(10)->create();

        \App\Models\Client::factory()->create([
             'name' => 'Test User',
             'lastname' => 'Test User',
             'email' => 'test@example.com',
         ]);
    }
}
