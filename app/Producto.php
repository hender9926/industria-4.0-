<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'tab_prod';
    protected $primaryKey = 'prod_id';
    protected $fillable = [
    	'prod_cod', 'prod_des', 'prod_min', 'prod_max',
    ];
}