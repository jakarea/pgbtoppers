<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->HasOne(User::class, 'id', 'user_id');
    }
}
