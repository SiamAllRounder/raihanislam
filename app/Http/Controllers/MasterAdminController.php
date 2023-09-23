<?php

namespace App\Http\Controllers;

use App\Models\MasterAdminORM;
use Illuminate\Http\Request;

class MasterAdminController extends Controller
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
        $request->session()->put('name', 'salam');
        echo $request->session()->get('name');
        // echo $request->session()->flush();
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterAdminORM $MasterAdminORM)
    {

        return view('master.admin.dashboard.index3');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MasterAdminORM $MasterAdminORM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MasterAdminORM $MasterAdminORM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MasterAdminORM $MasterAdminORM)
    {
        //
    }
}
