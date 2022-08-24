<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Title extends Component
{
    public $font;
    public string $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $class, $font)
    {
        $this->class = $class;
        $this->font = $font;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.title');
    }
}
