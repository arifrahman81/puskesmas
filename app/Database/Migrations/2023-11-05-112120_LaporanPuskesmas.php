<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LaporanPuskesmas extends Migration
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

            'kota' => [
                'type' => 'TEXT',
            ],

            'nama_puskesmas' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'judul_laporan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'file' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('laporan_puskesmas');
    }

    public function down()
    {
        $this->forge->dropTable('laporan_puskesmas');
    }
}
