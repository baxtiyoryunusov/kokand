<?php

namespace App\mode\Comment;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    public function getUser()
    {
        return $this->hasOne(User::class, 'id', 'writer_id');
    }
}
