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
                'password' => password_hash('admin', PASSWORD_DEFAULT),
                'firstname' => 'Paul',
                'lastname' => 'Admin-Account',
                'role' => UserRoles::ADMIN->value,
                'created_at' => $date,
                'updated_at' => $date,
            ]);
        }

        for ($i = 0; $i < 15; $i++) {
            $date = date('Y-m-d H:i:s');
            $this->db->table('users')->insert([
                'email' => $faker->email,
                'password' => password_hash('admin', PASSWORD_DEFAULT),
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'role' => UserRoles::CUSTOMER->value,
                'created_at' => $date,
                'updated_at' => $date,
            ]);
        }

    }
}
