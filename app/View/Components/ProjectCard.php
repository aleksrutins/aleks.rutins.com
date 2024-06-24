<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Facades\App\Services\Langley;

class ProjectCard extends Component
{
    public array|null $languages = null;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $url,
        public ?string $githubRepo = null
    ) {
        if ($githubRepo) {
            $this->languages = Langley::getLanguages($githubRepo);
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("components.project-card");
    }
}
