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

            'no_laporan' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
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
                'constraint' => 20
            ],

            'tanggal' => [
                'type' => 'DATE'
            ],

            'Puskesmas' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'laporan' => [
                'type' => 'TEXT'
            ],

            'status' => [
                'type' => 'ENUM',
                'constraint' => ['terkirim', 'dibaca', 'ditangani'],
                'default' => 'terkirim'
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
