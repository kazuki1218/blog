<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Blog extends Model
{
    use HasFactory,Notifiable;
    // テーブル名
    protected $table = 'blogs';

    // 可変項目
    protected $fillable =
    [
        'title',
        'content'
    ];
}
