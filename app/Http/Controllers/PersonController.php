<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person = Person::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'phone' => $request['phone']
        ]);

        return response()->json([
           'person' => $person,
           'result' => 'Tus datos se guardaron con éxíto' 
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person, $email)
    {
        $persona = Person::where('email', $email)->first();

        if (!$persona) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        return response()->json($persona);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
