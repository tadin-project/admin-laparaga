<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MsUserSeeder extends Seeder
{
    public function run()
    {
        $created_at = date('Y-m-d H:i:s');
        $data = [
            [
                "user_id" => 1,
                "user_name" => "root",
                "user_fullname" => "Admin Vendor",
                "user_email" => "iqbalmuhtadin24@gmail.com",
                "user_status" => 1,
                "password" => password_hash("adminvendor", PASSWORD_DEFAULT),
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "user_id" => 2,
                "user_name" => "admin",
                "user_fullname" => "Administrator",
                "user_email" => "admin@gmail.com",
                "user_status" => 1,
                "password" => password_hash("admin", PASSWORD_DEFAULT),
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ], [
                "user_id" => 3,
                "user_name" => "user01",
                "user_fullname" => "User 01",
                "user_email" => "user01@gmail.com",
                "user_status" => 1,
                "password" => password_hash("user01", PASSWORD_DEFAULT),
                "created_at" => $created_at,
                "updated_at" => $created_at,
            ]
        ];

        $this->db->table("ms_user")->insertBatch($data);
    }
}
