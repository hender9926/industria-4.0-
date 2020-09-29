<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'tab_tur';
    protected $primaryKey = 'tur_id';
    protected $fillable = [
    	'tur_cod', 'tur_nom', 'tur_ini', 'tur_fin', 'tur_est',
    ];
}