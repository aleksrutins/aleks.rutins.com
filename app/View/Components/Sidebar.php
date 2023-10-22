<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $links = [
        [ 'text' => 'Home', 'route' => 'home', 'icon' => 'home' ],
        [ 'text' => 'Projects', 'route' => 'projects', 'icon' => 'computer-desktop' ],
        [ 'text' => 'Blog', 'route' => 'blog', 'icon' => 'newspaper' ]
    ];
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
        return view('components.sidebar');
    }
}
