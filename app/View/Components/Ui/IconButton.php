<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $text, public string $class = '')
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.ui.icon-button');
    }
}
