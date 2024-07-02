<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nombre' => 'Admin',
                'email' => 'a@a.com',
                'email_verified_at' => now(),
                'contrasena' => Hash::make('12345'), // Hashea la contraseña
                'rol' => true, // Usuario con rol de acceso al ABM
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cliente ',
                'email' => 'c@c.com',
                'email_verified_at' => now(),
                'contrasena' => Hash::make('1234'), // Hashea la contraseña
                'rol' => false, // Usuario sin rol de acceso al ABM
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cliente 1',
                'email' => 'c1@c1.com',
                'email_verified_at' => now(),
                'contrasena' => Hash::make('1234'), // Hashea la contraseña
                'rol' => false, // Usuario sin rol de acceso al ABM
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cliente 2',
                'email' => 'c2@c2.com',
                'email_verified_at' => now(),
                'contrasena' => Hash::make('1234'), // Hashea la contraseña
                'rol' => false, // Usuario sin rol de acceso al ABM
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cliente 3',
                'email' => 'c3@c3.com',
                'email_verified_at' => now(),
                'contrasena' => Hash::make('1234'), // Hashea la contraseña
                'rol' => false, // Usuario sin rol de acceso al ABM
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cliente 4',
                'email' => 'c4@c4.com',
                'email_verified_at' => now(),
                'contrasena' => Hash::make('1234'), // Hashea la contraseña
                'rol' => false, // Usuario sin rol de acceso al ABM
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'renzo',
                'email' => 'r@r.com',
                'email_verified_at' => now(),
                'contrasena' => Hash::make('1212'), // Hashea la contraseña
                'rol' => 1, // Usuario sin rol de acceso al ABM
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más usuarios según sea necesario
        ]);
    }
}
