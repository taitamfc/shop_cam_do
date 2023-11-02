<?php

namespace Database\Seeders;
use App\Models\Asset;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $phones = [
            [
                'name' => 'Iphone X',
                'status' => 0
            ],
            [
                'name' => 'Iphone Xs',
                'status' => 0
            ],
            [
                'name' => 'Iphone Xs Max',
                'status' => 0
            ],
            [
                'name' => 'Iphone Xr',
                'status' => 0
            ],
            [
                'name' => 'Iphone 11',
                'status' => 0
            ],
            [
                'name' => 'Iphone 11 pro',
                'status' => 0
            ],
            [
                'name' => 'Iphone 11 ProMax',
                'status' => 0
            ],
            [
                'name' => 'Iphone SE',
                'status' => 0
            ],
            [
                'name' => 'Iphone 12',
                'status' => 0
            ],
            [
                'name' => 'Iphone 12 pro',
                'status' => 0
            ],
            [
                'name' => 'Iphone 12 ProMax',
                'status' => 0
            ],
            [
                'name' => 'Iphone 13',
                'status' => 0
            ],
            [
                'name' => 'Iphone 13 pro',
                'status' => 0
            ],
            [
                'name' => 'Iphone 13 ProMax',
                'status' => 0
            ],
            [
                'name' => 'Iphone 14',
                'status' => 0
            ],
            [
                'name' => 'Iphone 14 pro',
                'status' => 0
            ],
            [
                'name' => 'Iphone 14 ProMax',
                'status' => 0
            ],
            [
                'name' => 'Iphone 15',
                'status' => 0
            ],
            [
                'name' => 'Iphone 15 pro',
                'status' => 0
            ],
            [
                'name' => 'Iphone 15 ProMax',
                'status' => 0
            ],
        ];

        foreach ($phones as $item) {
            $isExist = Asset::where('name', $item['name'])
                ->exists();

            if ($isExist) continue;
            Asset::create($item);
        }
    }
}
