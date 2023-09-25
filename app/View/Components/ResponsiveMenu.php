<?php

namespace App\View\Components;
use App\Models\MainNavigationMenuModel;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResponsiveMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $home = MainNavigationMenuModel::where('id', 1)->value('name');
        $about = MainNavigationMenuModel::where('id', 2)->value('name');
        $seo = MainNavigationMenuModel::where('id', 3)->value('name');
        $blog = MainNavigationMenuModel::where('id', 4)->value('name');
        $contact = MainNavigationMenuModel::where('id', 5)->value('name');
        $appointment = MainNavigationMenuModel::where('id', 6)->value('name');

        $data = [
            'test' => 'salam',
            'home' => $home,
            'about' => $about,
            'seo' => $seo,
            'blog' => $blog,
            'contact' => $contact,
            'appointment' => $appointment,
        ];
        return view('components.responsive-menu',$data);
    }
}
