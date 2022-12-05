<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable =[
        "id_contact",
        "tarea",
        "responsable"
    ];

    public function contacts(){
        return $this->belongsTo(Contact::class,"id_contact","id");
    }
}
