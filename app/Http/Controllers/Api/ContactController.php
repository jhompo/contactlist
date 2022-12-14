<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use App\Models\Contact;
use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $objContact = Contact::with("tasks","comentarios")->orderBy('nombre','ASC')->get();
        return response()->json(($objContact));
    }


    public function store(Request $request)
    {
        Contact::create($request->all());
        return response()->json(['message' => 'Contacto creado satisfactoriamente'], 201);
    }


    public function show(Contact $contact)
    {
        return Contact::find($contact->id);
    }


    public function update(Request $request, Contact $contact)
    {
        try {
            $contact->update($request->all());
            return response(['message' => 'Contacto actualizado satisfactoriamente', 'status' => 200]);

        } catch (ModelNotFoundException $e) {
            return response(['message' => 'Item Not Found!', 'status' => 404]);
        }

    }


    public function destroy(Contact $contact)
    {
        $tarea = Task::where('id_contact',$contact->id);
        if($tarea!=null){
            $tarea->delete();
        }

        $comen = Comentario::where('id_contact',$contact->id);
        if($tarea){
            $comen->delete();
        }

        $contact->delete();
        return response()->noContent();
    }

}
