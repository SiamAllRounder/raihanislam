<?php

namespace App\View\Components;
use App\Models\HeroTexts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroArea extends Component
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
        //User::where('id', 1)->value('name')
        $hero_text_description_on_left = HeroTexts::where('id', 1)->value('home_page_hero_text_description_on_left_column');
        $data = [
            'hero_text_description_on_left' => $hero_text_description_on_left
        ];
        return view('components.hero-area',$data);
    }
}
