<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Point extends Component
{
    public $point;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($point)
    {
        $this->point = $point;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.point');
    }
}