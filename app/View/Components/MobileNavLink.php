<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MobileNavLink extends Component
{
    /**
     * Create a new component instance.
     */
    public $href;
    public $active;
    public $icon;

    public function __construct($href, $active = false, $icon = null)
    {
        $this->href = $href;
        $this->active = $active;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('components.mobile-nav-link');
    }
}
