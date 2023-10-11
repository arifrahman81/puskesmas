<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LaporanMasyarakat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'alamat' => [
                'type' => 'TEXT'
            ],

            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],

            'date' => [
                'type' => 'DATE'
            ],

            'Puskesmas' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'laporan' => [
                'type' => 'TEXT'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('laporanmasyarakat');
    }

    public function down()
    {
        $this->forge->dropTable('laporanmasyarakat');
    }
}
