<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = ['user_id','categoria_id','nombre_tarea','prioridad','fecha_inicio','fecha_termino','descripcion'];
    protected $dates =  ['fecha_inicio','fecha_termino','create_at','update_at'];
    //
    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class); //pertenece a una categoria
    }
}

