<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    protected $fillable = ['title', 'content'];
    use HasFactory;

    public function user()
    {

        return $this->belongsTo('App\Models\User');
    }
}





