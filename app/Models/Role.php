<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'name',
        'guard_name',
    ];

    const ROLE_ADMIN      = 1;


    const ROLE_PERMISSIONS = [
        self::ROLE_ADMIN  => [], // has all permissions
    ];
}
