<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MsMenu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menu_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'menu_kode' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'menu_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'menu_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'menu_ikon' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'menu_komponen' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'parent_menu_id' => [
                'type'       => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'menu_status' => [
                'type' => 'BOOLEAN',
                'default' => true,
            ],
            'cm_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ],
        ]);

        $this->forge->addKey('menu_id', true);
        $this->forge->addForeignKey('cm_id', 'ms_category_menu', 'cm_id', 'CASCADE', 'CASCADE');

        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('ms_menu', false, $attributes);
    }

    public function down()
    {
        $this->forge->dropTable('ms_menu');
    }
}
