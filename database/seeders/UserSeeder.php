<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'mail@noven.id',
            'name' => 'I Putu Noven Hartawan',
            'password' => Hash::make('12345678'),
        ]);
    }
}
