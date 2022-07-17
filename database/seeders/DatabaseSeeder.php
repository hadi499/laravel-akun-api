<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Transaction::create([
            'title' => 'bbb',
            'amount' => 100000,
            'type' => 'expense'
        ]);
        Transaction::create([
            'title' => 'ccc',
            'amount' => 60000,
            'type' => 'expense'
        ]);
        Transaction::create([
            'title' => 'ddd',
            'amount' => 200000,
            'type' => 'revenue'
        ]);
    }
}
