<?php
namespace App\Http\Controllers;

use App\Models\MainNavigationMenuModel;
use App\Models\FooterNote;
use Illuminate\Http\JsonResponse;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function checkTableEmpty()
{
    $tableName = (new MainNavigationMenuModel)->getTable();
    $tableNamefootnote = (new FooterNote)->getTable();

    // Use Eloquent to count the rows in the table
    $rowCount = MainNavigationMenuModel::count();
    $rowCountfootnote = FooterNote::count();

    if ($rowCountfootnote === 0) { 
        FooterNote::create([
            'footernote' => null // Replace with the desired name
        ]);

    }
    if ($rowCount === 0) {
        // Table exists and is empty, insert data into the "name" column
        MainNavigationMenuModel::create([
            'name' => 'Home', // Replace with the desired name
        ]);
        MainNavigationMenuModel::create([
            'name' => 'About', // Replace with the desired name
        ]);
        MainNavigationMenuModel::create([
            'name' => 'SEO Training', // Replace with the desired name
        ]);
        MainNavigationMenuModel::create([
            'name' => 'Blog', // Replace with the desired name
        ]);
        MainNavigationMenuModel::create([
            'name' => 'Contact Us', // Replace with the desired name
        ]);
        MainNavigationMenuModel::create([
            'name' => 'Need an Appointment', // Replace with the desired name
        ]);




        return response()->json([
            'message' => "Table '{$tableName}' exists and was empty. Data has been inserted into the 'name' column.",
        ]);
    } else {
        // Table exists and is not empty
        return response()->json([
            'message' => "Table '{$tableName}' exists and has {$rowCount} rows.",
        ]);
    }
}


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

          // Call the checkTableEmpty() method
    $tableStatus = $this->checkTableEmpty();


        return view('home');
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
        return "this is show method on Home Controller";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
