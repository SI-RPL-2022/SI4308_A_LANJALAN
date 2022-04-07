<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pesanan(){
        return $this->hasMany(pesanan::class);
    }
    public function travel_agent(){
        return $this->hasMany(travel_agent::class);
    }
    public function bundle(){
        return $this->hasMany(bundle::class);
    }
}
