<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //en caso de que el nombre d ela tabla no sea igual que el nombre dle modelo
    protected $table='posts';
    protected $fillable = ['title','body'];
}
