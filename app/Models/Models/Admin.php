<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $connection = 'pgsql_admin';
    protected $table = 'admins';           
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
