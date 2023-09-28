<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\HeroTexts;


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
        
    }

    public function sessionsetter(Request $request)
    {
        $username = User::where('id', 1)->value('name');

        $request->session()->put('name',  $username);

        // $request->session()->flush();

        echo $request->session()->get('name');
        return redirect('/dashboard');
    }

    public function sessionremover(Request $request)
    {
        

        $request->session()->flush();

        echo $request->session()->get('name');
        return redirect('/masterlogin');
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterAdminORM $MasterAdminORM)
    {
        $hero_text_description_on_left = HeroTexts::where('id', 1)->value('home_page_hero_text_description_on_left_column');
        $data = [
            'hero_text_description_on_left' => $hero_text_description_on_left
        ];

        return view('master.admin.dashboard.index',$data);
    }

  public function hero_text_left_updater(Request $request) {

    

    if ($request->isMethod('post')) {
        if (Auth::check()) {
            // The user is logged in
            // You can access the authenticated user with auth()->user()
            // Handle form submission and update the database here
            $newHeroTextonLeft = $request->input('hero_text_description_on_left');
            DB::table('home_page_hero_texts')->update(['home_page_hero_text_description_on_left_column' => $newHeroTextonLeft]);
            
            // Redirect back to the form or any other page
            return redirect()->route('dashboard'); // Replace with your desired route
        } else {
            // The user is not logged in
            return redirect()->route('home');
        }
    }

  }

    public function footer_text_editor(MasterAdminORM $MasterAdminORM, Request $request)
{
    if ($request->isMethod('post')) {
        // Handle form submission and update the database here
        $newFootnoteText = $request->input('footnote_text');
        DB::table('footnote')->update(['footernote' => $newFootnoteText]);
        
        // Redirect back to the form or any other page
        return redirect()->route('footer-text-editor'); // Replace with your desired route
    }

    // If it's a GET request, retrieve the current footnote data
    $footnote = DB::table('footnote')->first(); // Assuming there's only one footnote record

    $data = [
        'footnote' => $footnote
    ];

    return view('master.admin.dashboard.footer-text-editor', $data);
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
