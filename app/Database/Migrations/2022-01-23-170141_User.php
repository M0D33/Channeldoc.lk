<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Employee_id' => [
                'type'=>'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'fname'=>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Lname'=>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Email'=>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'loginname'=>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'pwd'=>[
                'type' => 'VARCHAR',
                'constraint' => 100,

            ],
        ]);
        $this->forge->addPrimaryKey('Employee_id', true);
        $this->forge->createTable('user');

    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
