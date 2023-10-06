<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ProductCategory extends Model
{
    use HasFactory;
    use HasSlug;

    protected $table = 'categories';

    protected $primaryKey = 'id';

    protected $fillable = ['id','name','slug','image','created_at','updated_at'];

    public $timestamp = true;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
