<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    use HasFactory;

    protected $table = "commune";
    protected $primaryKey = 'id';

    protected $filable = ['id', 'name', 'district_id'];

    public $timestamps = true;

    public function districts()
    {
        return $this->belongsTo(Districts::class);
    }
}
