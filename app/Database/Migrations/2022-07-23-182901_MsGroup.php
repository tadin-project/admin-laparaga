<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MsGroup extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'group_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'group_kode' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'group_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'group_desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'group_status' => [
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

        $this->forge->addKey('group_id', true);

        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('ms_group', false, $attributes);
    }

    public function down()
    {
        $this->forge->dropTable('ms_group');
    }
}
