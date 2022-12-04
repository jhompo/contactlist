<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    

    public function index()
    {
        $objTask = Task::all();
        return  $objTask;
    }


    public function store(Request $request)
    {
        Task::create($request->all());
        return response()->json([
           'message' => 'Tarea creada satisfactoriamente'
           ], 201);
    }

    
    public function show(Task $Task)
    {
        return Task::find($Task->id);
    }

    public function task($idcontact)
    {
        return Task::where('id_contact',$idcontact)->get();
    }
    
    public function update(Request $request, Task $Task)
    {
        try {
            $objTask = Task::find($Task->id); 
            $objTask->update($request->all());
            return response(['message' => 'tarea actualizada satisfactoriamente', 'status' => 200]);
            
        } catch (ModelNotFoundException $e) {
            return response(['message' => 'Item Not Found!', 'status' => 404]);
        }
       
    }

    
    public function destroy(Task $Task)
    {
        $Task->delete();
        return response()->noContent();

    }

}
