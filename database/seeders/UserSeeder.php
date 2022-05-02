<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Database\Factories\UserFactory;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'bigscreen';
        $user->email = 'bigscreen@gmail.com';
        $user->password = Hash::make('bigscreen075');
        $user->save();
    }
}
