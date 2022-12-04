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
        'id_tipo',
        'id_origen'
    ];

    public function tasks(){
        return $this->hasMany(Task::class,"id_contact");
    }


    public function comentarios(){
        return $this->hasMany(Comentario::class,"id_contact");
    }

    
    public function Origen(){
        $this->belongsTo(Origen::class);
    }
    

    public function TipoCliente(){
        $this->belongsTo(TipoCliente::class);
    }
}
