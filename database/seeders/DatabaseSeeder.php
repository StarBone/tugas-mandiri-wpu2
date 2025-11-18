<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '0812345678901',
            'password' => bcrypt('P@55word'),
        ]);

        #untuk record berikutnya silahkan, beri nilai berbeda pada nilai: nama, email, hp dengan

        User::create([
            'nama' => 'Sopian Aji',
            'email' => 'sopian4ji@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '081234567892',
            'password' => bcrypt('P@55word'),
        ]);

        Anggota::create([
            'nama' => 'Sopian Aji',
            'hp' => '085123456781',
        ]);

        Anggota::create([
            'nama' => 'Husni Faqih',
            'hp' => '085123456782',
        ]);

        Anggota::create([
            'nama' => 'Rousyati',
            'hp' => '085123456783',
        ]);
    }
}
