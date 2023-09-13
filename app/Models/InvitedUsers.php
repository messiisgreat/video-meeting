<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvitedUsers extends Model
{
    protected $table = 'invited_users';
    protected $fillable = [
        'id', 'title', 'type', 'trigger', 'content', 'writer', 'memo'
    ];
    use HasFactory;

}
