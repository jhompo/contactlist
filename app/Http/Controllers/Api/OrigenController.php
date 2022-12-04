<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Origen;
use Illuminate\Http\Request;

class OrigenController extends Controller
{
   
    public function index()
    {
        return Origen::all();
    }

    
}
