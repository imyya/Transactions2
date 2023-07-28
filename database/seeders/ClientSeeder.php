<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            ['nom' => 'Diallo', 'prenom' => 'Amadou'],
            ['nom' => 'Sarr', 'prenom' => 'Mariam'],
            ['nom' => 'Gueye', 'prenom' => 'Babacar'],
            ['nom' => 'Ndiaye', 'prenom' => 'Khady'],
            ['nom' => 'Diop', 'prenom' => 'Cheikh'],
            ['nom' => 'Fall', 'prenom' => 'Aissatou']
        ];

        Client::insert($clients);
    }
}
