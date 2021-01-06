<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = "agenda";
    public $timestamps = false;
    protected $fillable = ['judulagenda','gambaragenda','deskripsiagenda'];
}
