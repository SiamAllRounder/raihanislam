<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class MasterAdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
    }

    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('master.admin.auth.login');
    }

    public function login(Request $request)
    {


        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ])->validate();
        if (auth()->attempt(request()->only(['email', 'password']))) {
            $username = User::where('id', 1)->value('name');

        $request->session()->put('name',  $username);
            return redirect('/dashboard');
        }
        return redirect()->back()->withErrors(['email' => 'Invalid Credentials']);
    }
    // public function logon()
    // {

    // }



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
