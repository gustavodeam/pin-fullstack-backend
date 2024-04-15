<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PersonController;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
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

        $userId = $request->input('user_id');

        if (!$userId) 
        {
            $personController = new PersonController();
        
            $userData = [
                'firstname' => $request['firstname'],
                'lastname' => $request['lastname'],
                'email' => $request['email'],
                'phone' => $request['phone']
            ];        
            $response = $personController->store(new Request($userData));
            $userId = $response->getData()->person->id;
        }
        else
        {
            $userId = $request['user_id'];
        }


        $message = Message::create([
            'user_id' => $userId,
            'message' => $request['message']
        ]);

        return response()->json([
           'message' => $message,
           'result' => 'Tu mensaje fue enviado con éxito' 
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
