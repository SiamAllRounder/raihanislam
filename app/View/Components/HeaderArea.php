<?php

namespace App\View\Components;
use App\Models\User;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderArea extends Component
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
        $first_name = User::where('id', 1)->value('first_name');
        $last_name = User::where('id', 1)->value('last_name');

        $data = [
            'test' => 'salam',
            'first_name' => $first_name,
            'last_name' => $last_name
        ];
        return view('components.header-area',$data);
    }
}
