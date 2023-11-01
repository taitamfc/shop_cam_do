<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LogSeeder::class,
            CustomerSeeder::class,
            AssetSeeder::class,
            ContractSeeder::class,
            ExpenseSeeder::class,
            PaymentSeeder::class,
            FundSeeder::class,
            AssetTypeSeeder::class,
        ]);
    }
}
