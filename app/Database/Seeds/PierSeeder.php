<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Carbon\Carbon;

class PierSeeder extends Seeder
{
    public function run()
    {
        $count = 1;
        for ($j = 0; $j < 4; $j++) {
            for ($i = 0; $i < 7; $i++) {
                $this->db->table('piers')->insert([
                    'name' => 'Anleger ' . $count,
                    'pos_x' => $i,
                    'pos_y' => $j,
                    'has_boat' => rand(0,1),
                    'is_active' => true,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]);
                $count++;
            }
        }

    }
}
