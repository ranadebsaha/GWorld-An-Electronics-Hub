<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="product";
    protected $primaryKey="product_id";
    // public function product(){
    //     return $this->hasMany('App\Models\Gadget',)
    // }
}
