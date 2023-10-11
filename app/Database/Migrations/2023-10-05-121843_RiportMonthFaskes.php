<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RiportMonthFaskes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],

            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'name_faskes' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'address' => [
                'type' => 'TEXT',
            ],
            'puskesmas' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'name_laporan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'catatan' => [
                'type' => 'TEXT',
                'default' => 'null'
            ],
            'file' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'date' => [
                'type' => 'DATE'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('RiportMonthFaskes');
    }

    public function down()
    {
        $this->forge->dropTable('RiportMonthFaskes');
    }
}
