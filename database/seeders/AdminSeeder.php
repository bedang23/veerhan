<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        AdminUser::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@veerhan.com')],
            [
                'name'     => 'Veerhan Admin',
                'password' => Hash::make(env('ADMIN_PASSWORD', 'Veerhan@Admin2025')),
            ]
        );
    }
}
