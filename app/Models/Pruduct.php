<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pruduct extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'refProduct';
    public $incrementing = false;
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order','order_pruduct','ref_Order','refProduct');
       
    }
}
