<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class); //el equipo pertenece a muchos usuarios
    }

    public function equipos()
    {
        return $this->belongsToMany(Equipo::class); //el equipo pertenece a muchos usuarios
    }
}
