<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    // public function education() : HasMany {
    //     return $this->hasMany(Education::class);
    // }
}
