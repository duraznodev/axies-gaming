<?php

namespace App\View\Components\Item;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthorCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $author)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item.author-card');
    }
}
