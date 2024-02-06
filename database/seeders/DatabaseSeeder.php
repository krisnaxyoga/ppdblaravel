<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'superadmin',
        ]);

        Role::create([
            'role_name' => 'adminsekolah',
        ]);
        
        Role::create([
            'role_name' => 'siswa',
        ]);
        
        User::factory(5)->create();
    }
}
