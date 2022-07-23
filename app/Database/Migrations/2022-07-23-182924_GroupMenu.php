<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GroupMenu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menu_id' => [
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

        $this->forge->addForeignKey('menu_id', 'ms_menu', 'menu_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('group_id', 'ms_group', 'group_id', 'CASCADE', 'CASCADE');

        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('group_menu', false, $attributes);
    }

    public function down()
    {
        $this->forge->dropTable('group_menu');
    }
}
