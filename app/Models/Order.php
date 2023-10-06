<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'id';

    protected $fillable = ['id','full_name','user_id','phone','email','address','shipping_method','created_at','updated_at'];

    public $timestamp = true;
    
}
