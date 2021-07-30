<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

     //Relacion uno a muchos
     public function divisions(){
        return $this->hasMany(Division::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

}
