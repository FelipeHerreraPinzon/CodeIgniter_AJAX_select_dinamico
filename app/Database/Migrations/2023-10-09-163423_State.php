<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class State extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'state_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'country_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'state_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            
        ]);
        $this->forge->addKey('state_id', true);
        $this->forge->createTable('state');
    }

    public function down()
    {
        $this->forge->dropTable('state');
    }
}
