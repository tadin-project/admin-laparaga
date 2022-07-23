<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MsUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'password' => [
                'type' => 'TEXT',
            ],
            'user_status' => [
                'type' => 'BOOLEAN',
                'default' => true,
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ],
        ]);

        $this->forge->addKey('user_id', true);

        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('ms_user', false, $attributes);
    }

    public function down()
    {
        $this->forge->dropTable('ms_user');
    }
}
