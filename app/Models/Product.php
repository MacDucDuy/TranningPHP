<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;
    use HasSlug;
 
    protected $table = 'products';

    protected $primarKey = 'id';

    protected $fillable = ['id', 'name', 'category_id', 'price', 'slug', 'content', 'desciption', 'status','created_at','updated_at'];

    public $timestamp = true;


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
