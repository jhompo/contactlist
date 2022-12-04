<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $fillable =[
        "nombre",
        "apellidos",
        "email",
        "telefono",
        "genero",
        "fecha_nacimiento",
        "direccion",
    ];

    public function Tasks(){
        $this->hasMany(Task::class);
    }


    public function Comentarios(){
        $this->hasMany(Origen::class);
    }

    public function Origen(){
        $this->belongsTo(Origen::class);
    }
    

    public function TipoCliente(){
        $this->belongsTo(TipoCliente::class);
    }
}
