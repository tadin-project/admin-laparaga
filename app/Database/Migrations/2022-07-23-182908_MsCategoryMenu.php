<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MsCategoryMenu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cm_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cm_kode' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'cm_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'cm_status' => [
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

        $this->forge->addKey('cm_id', true);

        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('ms_category_menu', false, $attributes);
    }

    public function down()
    {
        $this->forge->dropTable('ms_category_menu');
    }
}
