<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_images';

    protected $primaryKey = 'id';

    protected $fillabel = ['id','product_id','path','is_primary','created_at','updated_at'];

    public $timestamp = true;
}
