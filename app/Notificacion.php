<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table      = 'tab_not';
    protected $primaryKey = 'not_id'; 
    protected $fillable   =[
    	'not_fk_pesa',
    ];
}
