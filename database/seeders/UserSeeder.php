<?php

namespace Database\Seeders;

use App\Enums\RoleUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'admin',
            'email' => 'admin@h89.com',
            'password' => bcrypt('admin@h892023'),
            'role_id' => RoleUser::ADMIN
        ];

        $isExist = User::where('email', $data['email'])->exists();
        if (!$isExist) {
            User::insert($data);
        }
    }
}
