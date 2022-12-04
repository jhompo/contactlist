<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Contact::orderBy("nombre","ACS")->paginate();
    }


    public function store(Request $request)
    {
        
    }

    
    public function show(Contact $contact)
    {
        return Contact::orderBy("nombre","ACS")->paginate();
        
    }

    
    public function update(Request $request, Contact $contact)
    {
        
    }

    
    public function destroy(Contact $contact)
    {
        
    }
}
