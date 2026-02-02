<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PierSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 41; $i++) {
            $value = $i + 100;
            $this->db->table('piers')->insert([
                'name' => 'Anlegestelle ' . $value,
                'place_number' => $value,
                'has_boat' => rand(0,1),
                'is_active' => true,
            ]);
        }
    }
}
