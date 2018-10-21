<?php

namespace sinanemia;

use Illuminate\Database\Eloquent\Model;

class alimentos extends Model
{
    //
    protected $table = 'Tabla_alimentos';
    protected $primaryKey = 'id';
    public $timestamps=false;

    protected $filleable = [
    	
    	'nombre',
        'tamaño',
        'peso',
        'proteina',
        'femg',
        'vitamina',
        'imagen',
        'tipo',
   ];

   protected $guarded =[
     
   ];
}
