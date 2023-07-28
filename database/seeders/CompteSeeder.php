<?php

namespace Database\Seeders;

use App\Models\Compte;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comptes = [
            ['client_id' => 1, 'numero' => '77 123 45 67', 'solde' => '5000', 'fournisseur' => 'OM'],
            ['client_id' => 2, 'numero' => '76 234 56 78','solde' => '5000',  'fournisseur' => 'WV'],
            ['client_id' => 3, 'numero' => '70 345 67 89', 'solde' => '5000', 'fournisseur' => 'WR'],
            ['client_id' => 4, 'numero' => '77 456 78 90', 'solde' => '5000', 'fournisseur' => 'CB'],
            ['client_id' => 5, 'numero' => '76 567 89 01', 'solde' => '5000', 'fournisseur' => 'OM'],
            ['client_id' => 6, 'numero' => '70 678 90 12', 'solde' => '5000', 'fournisseur' => 'WV']
        ];

        Compte::insert($comptes);
    }
}
