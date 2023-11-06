<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SendInformation extends Migration
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

            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'nama_faskes' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'alamat' => [
                'type' => 'TEXT',
            ],

            'puskesmas' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'informasi' => [
                'type' => 'TEXT',
            ],

            'tanggal' => [
                'type' => 'DATE',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('send_information');
    }

    public function down()
    {
        $this->forge->dropTable('send_information');
    }
}
