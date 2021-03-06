<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment',
        'ip_address',
        'book_isbn'
    ];

    public $validation = [
        'comment' => 'required|max:500',
        'ip_address' => 'required',
        'book_isbn' => 'required'
    ];
}
