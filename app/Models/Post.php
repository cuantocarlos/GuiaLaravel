<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [ //mio
        'body'
    ];

    protected $with = ['user']; //mio

    public function user() //mio
    {
        return $this->belongsTo(User::class);
    }
}
