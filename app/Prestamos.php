<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    public function libro()
    {
        return $this->hasMany(Libros::class);
    }
    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
