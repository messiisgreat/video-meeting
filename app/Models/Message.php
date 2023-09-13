<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'id', 'title', 'type', 'trigger', 'content', 'writer', 'memo'
    ];
    
    use HasFactory;
}
