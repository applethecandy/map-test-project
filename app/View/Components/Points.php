<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Points extends Component
{
    public $points;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($points)
    {
        $this->points = $points;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.points');
    }
}