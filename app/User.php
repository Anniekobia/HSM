<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function selectAllUsers()
    {
        $systemUsers = User::all();
        return $systemUsers;
    }
}