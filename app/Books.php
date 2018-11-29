<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    public $table = "books";
    protected $primaryKey = "id";
    public $timestamps = false;
}
