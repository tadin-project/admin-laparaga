<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MsGroupSeeder extends Seeder
{
    public function run()
    {
        $created_at = date('Y-m-d H:i:s');
        $data = [
            [
                "group_id" => 1,
                "group_kode" => "01",
                "group_nama" => "Root",
                "group_status" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 2,
                "group_kode" => "02",
                "group_nama" => "Administrator",
                "group_status" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 3,
                "group_kode" => "03",
                "group_nama" => "User",
                "group_status" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ]
        ];

        $this->db->table("ms_group")->insertBatch($data);
    }
}
