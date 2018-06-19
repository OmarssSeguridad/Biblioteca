<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
    public function prestamo()
    {
        return $this->hasMany(Prestamos::class);
    }
}
