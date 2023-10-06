<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    
    protected $table = 'order_items';

    protected $primaryKey = 'id';

    protected $fillable = ['id','order_id','product_id','price','qty','total','created_at','updated_at'];

    public $timestamp = true;
}
