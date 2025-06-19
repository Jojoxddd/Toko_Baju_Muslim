<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens, HasFactory;
    protected $connection = 'pgsql_users';
    protected $fillable = ['name', 'email', 'password', 'role'];
}
