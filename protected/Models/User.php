<?php

namespace App\Models;

use T4\Orm\Model;

class User
    extends Model
{
    protected static $schema = [
        'columns' => [
            'first_name' => ['type' => 'string'],
            'middle_name' => ['type' => 'string'],
            'last_name' => ['type' => 'string'],
            'email' => ['type' => 'string'],
        ]
    ];

    public function getName()
    {
        if (!empty($this->first_name) && !empty($this->middle_name) && !empty($this->last_name)) {
            $res = implode(' ', [$this->first_name, $this->middle_name, $this->last_name]);
        } elseif (empty($this->first_name) || empty($this->last_name)) {
            $res = $this->email;
        } elseif (empty($this->middle_name)) {
            $res = implode(' ', [$this->first_name, $this->last_name]);
        }
        return $res;
    }
}