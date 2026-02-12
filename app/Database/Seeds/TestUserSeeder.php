<?php

namespace App\Database\Seeds;

use App\Enums\UserRoles;
use CodeIgniter\Database\Seeder;

class TestUserSeeder extends Seeder
{
    // Attention: This Seeder is unsafe and can crash!
    // Only execute on an empty/fresh Users-Table!
    public function run()
    {
        $faker = \Faker\Factory::create();
        $date = date('Y-m-d H:i:s');


        $this->db->table('users')->insert([
            'email' => 'admin@ort-online.net',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'firstname' => 'Paul',
            'lastname' => 'Admin-Account',
            'role' => UserRoles::ADMIN->value,
            'created_at' => $date,
            'updated_at' => $date,
        ]);


        $this->db->table('users')->insert([
            'email' => 'paul.hornig@ort-online.net',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'firstname' => 'Paul',
            'lastname' => 'Tester',
            'role' => UserRoles::CUSTOMER->value,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        $this->db->table('users')->insert([
            'email' => 'frank.muehlen+1@bkukr.de',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'firstname' => 'Frank',
            'lastname' => 'Mühlen-Admin',
            'role' => UserRoles::CUSTOMER->value,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        $this->db->table('users')->insert([
            'email' => 'frank.muehlen@bkukr.de',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'firstname' => 'Frank',
            'lastname' => 'Mühlen',
            'role' => UserRoles::CUSTOMER->value,
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }

}
