<?php

namespace App\Database\Seeds;

use App\Enums\UserRoles;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $date = date('Y-m-d H:i:s');

        $user = $this->db->table('users')->where('email', 'admin@ort-online.net')->get()->getRow();

        if(!$user) {
            $this->db->table('users')->insert([
                'email' => 'admin@ort-online.net',
                'password' => 'admin',
                'first_name' => 'Paul',
                'last_name' => 'Admin-Account',
                'role' => UserRoles::ADMIN->value,
                'created_at' => $date,
                'updated_at' => $date,
            ]);
        }

        for ($i = 0; $i < 15; $i++) {
            $date = date('Y-m-d H:i:s');
            $this->db->table('users')->insert([
                'email' => $faker->email,
                'password' => 'admin',
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'role' => UserRoles::CUSTOMER->value,
                'created_at' => $date,
                'updated_at' => $date,
            ]);
        }

    }
}
