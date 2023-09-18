<?php

namespace Database\Seeders;

use App\Models\User;
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
        /*
        User::create([
            'name' => 'nihat.avci',
            'email' => 'nihat@test.com',
            'is_admin' => 1,
            'password' => bcrypt('12345678'),
        ]);
        */
        User::create([
            'name' => 'bienal',
            'email' => 'info@bienal.com.tr',
            'is_admin' => 1,
            'password' => bcrypt('bienal18092023'),
        ]);
    }
}
