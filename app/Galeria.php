<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Galeria extends Model
{
    
    protected $table ='galerias';
    protected $fillable =['titulo','descripcion','fecha_alta'];


}
