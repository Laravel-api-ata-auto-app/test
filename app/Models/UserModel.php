<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'information_user';
    protected $fillable=[
        'name',
        'gender',
        'email',
        'subject',
        'profile'
    ];
}
