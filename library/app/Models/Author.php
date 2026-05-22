<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    protected $filable =['name','born'];

    public function books(){
        return $this->hasMany('App\Models\Book');
    }
}
