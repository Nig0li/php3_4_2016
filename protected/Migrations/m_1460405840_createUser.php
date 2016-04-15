<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1460405840_createUser
    extends Migration
{

    public function up()
    {
        $this->createTable('users', [
            'first_name' => ['type' => 'string'],
            'middle_name' => ['type' => 'string'],
            'last_name' => ['type' => 'string'],
            'email' => ['type' => 'string'],
        ]);
    }

    public function down()
    {
        $this->dropTable('users');
    }
    
}