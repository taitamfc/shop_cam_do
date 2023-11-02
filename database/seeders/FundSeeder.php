<?php

namespace Database\Seeders;

use App\Models\Fund;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Quỹ số 1',
            'status' => Fund::ACTION,
            'amount' => Fund::DEFAULT_FUND
        ];
        $isExist = Fund::where('name', $data['name'])->exists();
        if (!$isExist) {
            Fund::insert($data);
        }
    }
}
