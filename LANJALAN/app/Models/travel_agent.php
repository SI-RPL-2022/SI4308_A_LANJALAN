<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel_agent extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
        'name', 'email', 'password'
    ];

    public function wisata(){
        return $this->hasMany(wisata::class);
    }
}
