<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index()
    {
        $objComentario = Comentario::all();
        return  $objComentario;
    }


    public function store(Request $request)
    {
        Comentario::create($request->all());
        return response()->json([
           'message' => 'Comentarioo creado satisfactoriamente'
           ], 201);
    }

    
    public function show(Comentario $Comentario)
    {
        return Comentario::find($Comentario->id);
    }

    public function comentarios($idcontact)
    {
        return Comentario::where('id_contact',$idcontact)->get();
    }
    
    public function update(Request $request, Comentario $Comentario)
    {
        try {
            $objComentario = Comentario::find($Comentario->id); 
            $objComentario->update($request->all());
            return response(['message' => 'Comentario actualizado satisfactoriamente', 'status' => 200]);
            
        } catch (ModelNotFoundException $e) {
            return response(['message' => 'Item Not Found!', 'status' => 404]);
        }
       
    }

    
    public function destroy(Comentario $Comentario)
    {
        $objComentario = Comentario::find($Comentario->id);
        $objComentario->delete();
    }
}