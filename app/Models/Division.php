<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'region_id'];

     //Relacion uno a muchos 
     public function negocios(){
        return $this->hasMany(Negocio::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    //Relacion uno a muchos inversa
    public function region(){
        return $this->belongsTo(Region::class);
    }

}
