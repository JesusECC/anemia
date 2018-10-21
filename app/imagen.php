<?php

namespace anemia;

use Illuminate\Database\Eloquent\Model;

class imagen extends Model
{
    //
    protected $table = 'iamgen';
    protected $primaryKey = 'id';
    public $timestamps=false;

    protected $filleable = [
    	
    	'nombre',
    	'tamaño',
        'Table_alimentos_id',
   ];

   protected $guarded =[
     
   ];
}
