<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table='user';
    protected $primarykey='id';
    protected $fillable=['img_title','img_description','photo'];
}
