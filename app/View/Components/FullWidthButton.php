<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FullWidthButton extends Component
{
    public $textOfFullWidthButton;
    public $routeOfFullWidthButton;

    /**
     * Create a new component instance.
     */
    public function __construct($textOfFullWidthButton, $routeOfFullWidthButton)
    {
        $this->textOfFullWidthButton = $textOfFullWidthButton;
        $this->routeOfFullWidthButton = $routeOfFullWidthButton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.full-width-button');
    }
}
