<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function contacts(){
        $this->belongsTo(Contact::class,"id_contact","id");
    }
}
