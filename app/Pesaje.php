<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Pesaje extends Model
{
    protected $table = 'tab_pesa';
    protected $primaryKey = 'pesa_id';
    protected $fillable = [
    	'pesa_fk_prod', 'pesa_peso', 'pesa_est', 'pesa_proc', 'pesa_est_peso',
    ];

    public function producto()
    {
        return $this->belongsTo('App\Producto', 'pesa_fk_prod', 'prod_id');
    }
}