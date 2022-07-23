<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GroupUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'group_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ],
        ]);

        $this->forge->addForeignKey('user_id', 'ms_user', 'user_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('group_id', 'ms_group', 'group_id', 'CASCADE', 'CASCADE');

        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('group_user', false, $attributes);
    }

    public function down()
    {
        $this->forge->dropTable('group_user');
    }
}
