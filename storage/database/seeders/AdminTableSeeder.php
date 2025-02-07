<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@earncapitalx.com',
            'password' => Hash::make('Earncapitalx'),//SafeHavenFx
            'unhashed_password' => 'Earncapitalx'
        ]);
    }
}
