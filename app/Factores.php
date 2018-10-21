<?php

namespace anemia;

use Illuminate\Database\Eloquent\Model;

class Factores extends Model
{
    protected $table = 'factores_importante';
    protected $primaryKey = 'id';
    public $timestamps=false;

    protected $filleable = [
    	
    	
        '$corte_tardio_cordon',
        '$lactancia6',
        '$micronutrientes',
        '$acceso_agua',
        '$acceso_desague',
   ];

   protected $guarded =[
     
   ];
}
