<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupMenuSeeder extends Seeder
{

    public function run()
    {
        $created_at = date('Y-m-d H:i:s');
        $data = [
            [
                "group_id" => 1,
                "menu_id" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 1,
                "menu_id" => 2,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 1,
                "menu_id" => 3,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 1,
                "menu_id" => 4,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 1,
                "menu_id" => 5,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 2,
                "menu_id" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 2,
                "menu_id" => 2,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 2,
                "menu_id" => 3,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 2,
                "menu_id" => 5,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 3,
                "menu_id" => 5,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ]
        ];

        $this->db->table("group_menu")->insertBatch($data);
    }
}
