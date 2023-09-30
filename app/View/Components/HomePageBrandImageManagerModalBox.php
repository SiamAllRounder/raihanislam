<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Facades\DB;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomePageBrandImageManagerModalBox extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function test()
    {
        return "salam from component route";
    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $latestImageName = DB::table('brand_image_table')
            ->orderBy('name', 'desc') // Replace 'your_column' with the desired column
            ->first();
            $data = [
                'latestImageName' => $latestImageName
            ];


        return view('components.dashboard.home-page-brand-image-manager-modal-box',$data);
    }


    public function imageUpload(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:560',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('assets/images/brand-image'), $imageName);

        DB::table('brand_image_table')->insert(['name' =>  $imageName]);

        return redirect()->back()->withSuccess('You have successfully upload image.')->with('image', $imageName);
    }
}
