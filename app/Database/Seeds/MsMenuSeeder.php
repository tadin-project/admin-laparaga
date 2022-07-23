<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MsMenuSeeder extends Seeder
{
    public function run()
    {
        $created_at = date('Y-m-d H:i:s');
        $data = [
            [
                "menu_id" => 1,
                "menu_kode" => "01",
                "menu_nama" => "Setting",
                "menu_url" => "#",
                "menu_ikon" => null,
                "menu_komponen" => null,
                "parent_menu_id" => 0,
                "menu_status" => 1,
                "cm_id" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "menu_id" => 2,
                "menu_kode" => "01.01",
                "menu_nama" => "Master Group",
                "menu_url" => "ms_group",
                "menu_ikon" => null,
                "menu_komponen" => null,
                "parent_menu_id" => 1,
                "menu_status" => 1,
                "cm_id" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "menu_id" => 3,
                "menu_kode" => "01.02",
                "menu_nama" => "Master User",
                "menu_url" => "ms_user",
                "menu_ikon" => null,
                "menu_komponen" => null,
                "parent_menu_id" => 1,
                "menu_status" => 1,
                "cm_id" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "menu_id" => 4,
                "menu_kode" => "99",
                "menu_nama" => "Master Menu",
                "menu_url" => "ms_menu",
                "menu_ikon" => null,
                "menu_komponen" => null,
                "parent_menu_id" => 0,
                "menu_status" => 1,
                "cm_id" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "menu_id" => 5,
                "menu_kode" => "00",
                "menu_nama" => "Dashboard",
                "menu_url" => "dashboard",
                "menu_ikon" => null,
                "menu_komponen" => null,
                "parent_menu_id" => 0,
                "menu_status" => 1,
                "cm_id" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ]
        ];

        $this->db->table("ms_menu")->insertBatch($data);
    }
}
