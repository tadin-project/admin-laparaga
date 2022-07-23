<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MsCategoryMenuSeeder extends Seeder
{
    public function run()
    {
        $created_at = date('Y-m-d H:i:s');
        $data = [
            [
                "cm_id" => 1,
                "cm_kode" => "01",
                "cm_nama" => "Web",
                "cm_status" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "cm_id" => 2,
                "cm_kode" => "02",
                "cm_nama" => "Mobile",
                "cm_status" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ]
        ];

        $this->db->table("ms_category_menu")->insertBatch($data);
    }
}
