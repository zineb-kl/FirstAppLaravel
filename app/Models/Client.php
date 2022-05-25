<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'phone','email','address'];

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
