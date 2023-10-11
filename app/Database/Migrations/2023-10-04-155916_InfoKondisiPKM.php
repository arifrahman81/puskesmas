<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InfoKondisiPKM extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true
            ],

            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'info' => [
                'type' => 'TEXT'
            ],

            'date' => [
                'type' => 'DATE'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('InfoKondisiPKM');
    }

    public function down()
    {
        $this->forge->dropTable('InfoKondisiPKM');
    }
}
