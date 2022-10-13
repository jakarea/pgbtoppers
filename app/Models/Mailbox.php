<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailbox extends Model
{
    use HasFactory;

    public function sender()
    {
        return $this->HasOne(User::class, 'id', 'sender_id');
    }

    public function receiver()
    {
        return $this->HasOne(User::class, 'id', 'receiver_id');
    }
}
