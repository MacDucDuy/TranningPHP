<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;

    protected $table = "districts";
    protected $primaryKey = 'id';

    protected $filable = ['id','name','province_id '];

    public $timestamps = true;

    public function wards(){
        return $this->hasMany(Wards::class);
    }

    public function provinces()
    {
        return $this->belongsTo(Provinces::class);
    }
}
