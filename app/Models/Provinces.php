<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;
    
    protected $table = "provinces";
    protected $primaryKey = 'id';

    protected $filable = ['id','name'];

    public $timestamps = true;

    public function districts(){
        return $this->hasMany(Districts::class);
    }

    
}
