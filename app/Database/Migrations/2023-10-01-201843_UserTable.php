<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserTable extends Migration
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
                'constraint' => '255'
            ],

            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],

            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],

            'role' => [
                'type' => 'ENUM',
                'constraint' => [
                    'dinkes',
                    'puskes',
                    'faskes'
                ]
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('UserTable');
    }

    public function down()
    {
        $this->forge->dropTable('UserTable');
    }
}
