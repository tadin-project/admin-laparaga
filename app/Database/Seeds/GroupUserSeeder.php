<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupUserSeeder extends Seeder
{
    public function run()
    {
        $created_at = date('Y-m-d H:i:s');
        $data = [
            [
                "group_id" => 1,
                "user_id" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 2,
                "user_id" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 3,
                "user_id" => 1,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 2,
                "user_id" => 2,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 3,
                "user_id" => 2,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "group_id" => 3,
                "user_id" => 3,
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ]
        ];

        $this->db->table("group_user")->insertBatch($data);
    }
}
