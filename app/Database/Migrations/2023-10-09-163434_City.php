<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class City extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'city_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'state_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'city_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            
        ]);
        $this->forge->addKey('city_id', true);
        $this->forge->createTable('city');
    }

    public function down()
    {
        $this->forge->dropTable('city');
    }
}
