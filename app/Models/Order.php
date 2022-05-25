<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'ref_Order';
    public $incrementing = false;
    
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
    public function pruducts()
    {    
       return $this->belongsToMany('App\Models\Pruduct','order_pruduct');
    }
}
