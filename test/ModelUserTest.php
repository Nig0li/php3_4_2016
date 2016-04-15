<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../protected/boot.php';
require __DIR__ . '/../protected/autoload.php';

class ModelUserTest
    extends PHPUnit_Framework_TestCase
{
    public function testUserName()
    {
        //Есть ФИО и email - 1
        $user1 = new \App\Models\User(['first_name' => 'Иван', 'middle_name' => 'Иванович', 'last_name' => 'Иванов', 'email' => 'ivan@ya.ru']);
        //Есть только ФИО - 1
        $user2 = new \App\Models\User(['first_name' => 'Иван', 'middle_name' => 'Иванович', 'last_name' => 'Иванов']);
        //Есть Имя, Фамилия и email - 2
        $user3 = new \App\Models\User(['first_name' => 'Иван', 'last_name' => 'Иванов', 'email' => 'ivan@ya.ru']);
        //Есть только Имя, Фамилия - 2
        $user4 = new \App\Models\User(['first_name' => 'Иван', 'last_name' => 'Иванов']);
        //Есть Отчество, Фамилия и email - 3
        $user5 = new \App\Models\User(['middle_name' => 'Иванович', 'last_name' => 'Иванов', 'email' => 'ivan@ya.ru']);
        //Есть Имя, Отчество и email - 3
        $user6 = new \App\Models\User(['first_name' => 'Иван', 'middle_name' => 'Иванович', 'email' => 'ivan@ya.ru']);
        //Есть Имя и email - 3
        $user7 = new \App\Models\User(['first_name' => 'Иван', 'email' => 'ivan@ya.ru']);
        //Есть Фамилия и email 3
        $user8 = new \App\Models\User(['last_name' => 'Иванов', 'email' => 'ivan@ya.ru']);

        $this->assertEquals('Иван Иванович Иванов', $user1->getName());
        $this->assertEquals('Иван Иванович Иванов', $user2->getName());
        $this->assertEquals('Иван Иванов', $user3->getName());
        $this->assertEquals('Иван Иванов', $user4->getName());
        $this->assertEquals('ivan@ya.ru', $user5->getName());
        $this->assertEquals('ivan@ya.ru', $user6->getName());
        $this->assertEquals('ivan@ya.ru', $user7->getName());
        $this->assertEquals('ivan@ya.ru', $user8->getName());

    }

}