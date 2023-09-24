<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class YourController extends Controller
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


    // YourController.php

public function yourMethod(Request $request)
{
    // Process the incoming JSON data
    // $data = $request->json()->all();
    $allusers = User::all();

    // You can do something with the data here

    // Return a JSON response
    return response()->json(['allusers' => $allusers]);
    // return response()->json(['allusers' => $allusers, 'data' => $data]);
    // return response()->json(['message' => 'Data received successfully', 'data' => $data]);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
