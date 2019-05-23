<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Galerium extends Model
{
    
    protected $table ='galeria';
    protected $fillable =['titulo','descripcion','fotoportada','fechapublicada'];
}
