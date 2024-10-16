<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constrant' => 5,
                'unsigned' => true,
                'auto_increment' =>true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'null' => 'false',
                'constraint' => 100
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => false,
            ],
            'description' => [
                'type' => 'VARCHAR',
                'null' => 'false',
                'constraint' => 250
            ],
            'quantity' => [
                'type' => 'INT',
                'null' => false,

            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
