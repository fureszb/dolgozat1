<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "user_id",
        "flight_id",
        "evaluation"
    ];

   
    public function flight() {
        return $this->hasMany(Flight::class, 'flight_id', 'flight_id');
    }
    
    public function user() {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
