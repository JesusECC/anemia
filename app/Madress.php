<?php

namespace sinanemia;

use Illuminate\Database\Eloquent\Model;

class Madress extends Model
{
    protected $table = 'madres';
    protected $primaryKey = 'id';
    public $timestamps=false;

    protected $filleable = [
    	
    	'nom_madre',
    	'dni',
      'edad',
      'lugar_residencia',
      'provincia',
      'departamento', 
      'distrito',
      'correo',
      'cel', 
      'estadoM',    
   ];

   protected $guarded =[
     
   ];
}
