<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens, HasFactory;

    protected $connection = 'pgsql_users';

    protected $fillable = ['name', 'email', 'password', 'role'];
}
