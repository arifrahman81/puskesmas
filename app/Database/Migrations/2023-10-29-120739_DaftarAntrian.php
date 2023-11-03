<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarAntrian extends Migration
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
                'constraint' => 20,
            ],

            'tgl_lahir' => [
                'type' => 'DATE',
            ],

            'alamat' => [
                'type' => 'TEXT',
            ],

            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],

            'puskesmas' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'keluhan' => [
                'type' => 'TEXT',
            ],

            'jam' => [
                'type' => 'TIME',
            ],

            'nomor_antrian' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('daftar_antrian');
    }

    public function down()
    {
        $this->forge->dropTable('daftar_antrian');
    }
}
