<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{


    protected $fillable = [
        'estado',
    ];

    public function libro()
    {
        return $this->belongsTo(Libros::class);
    }
    public function alumno()
    {
        return $this->hasMany(Alumno::class);
    }
    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
    
}
