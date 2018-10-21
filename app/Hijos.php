<?php

namespace anemia;

use Illuminate\Database\Eloquent\Model;

class Hijos extends Model
{
    //
    protected $table = 'hijos';
    protected $primaryKey = 'id';
    public $timestamps=false;

    protected $filleable = [
    	
    	'nombres',
        '$dni',
       '$fecha_nac',
       '$peso_nacer',
        '$edad_gestacional',
        '$talla_nacer',
        '$peso_actual',
        '$talla_actual',
        '$edad_meses',
        '$hemoglobina',
        '$tipo_parto',
        'madres_id',
        '$factores_importante_id',
       
   ];

   protected $guarded =[
     
   ];
}
