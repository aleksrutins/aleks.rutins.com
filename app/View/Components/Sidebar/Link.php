<?php

namespace App\View\Components\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $text,
        public string $route,
        public string $icon
    )
    {
        //
    }

    public function isActive(): bool
    {
        return Route::currentRouteName() == $this->route;
    }

    public function iconName(): string
    {
        $type = $this->isActive() ? 's' : 'o';
        return "heroicon-$type-{$this->icon}";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.link');
    }
}
