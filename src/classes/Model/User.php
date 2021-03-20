<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $guarded = [];
    protected $fillable = ['first_name'];

    public static function createUser($name)
    {
        return User::create(['first_name' => $name]);
    }
}