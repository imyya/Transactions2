<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            ['type' => 1, 'montant' => '2000', 'date'=>'2023-03-12','compte_id' => 1],
            ['type' => 0, 'montant' => '3000', 'date'=>'2023-03-12','compte_id' => 2],
            ['type' => 1, 'montant' => '1500', 'date'=>'2023-03-14','compte_id' => 1],
            ['type' => 2, 'montant' => '2500', 'date'=>'2023-03-15','compte_id' => 4],
            ['type' => 1, 'montant' => '3500', 'date'=>'2023-03-19','compte_id' => 5],
            ['type' => 0, 'montant' => '1000', 'date'=>'2023-03-14', 'compte_id' => 6]
        ];

        Transaction::insert($transactions);
    }
}
