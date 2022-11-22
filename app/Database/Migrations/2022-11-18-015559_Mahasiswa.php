<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'email' => ['type' => 'varchar', 'constraint' => 255],
            'nim' => ['type' => 'char', 'constraint' => 7],
            'fullname' => ['type' => 'varchar', 'constraint' => 255],
            'created_at' => ['type' => 'datetime', 'null' => true],
            'updated_at' => ['type' => 'datetime', 'null' => true],
            'user_image' => ['type' => 'text', 'constraint' => 255, 'default' => 'default.jpg', 'null' => true],
        ]);

        $this->forge->addkey('id', true);
        $this->forge->addUniqueKey('email');
        $this->forge->addUniqueKey('nim');

        $this->forge->createTable('mahasiswa', true);
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
        
    }
}
