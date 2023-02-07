<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Title extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $text;
    public $tw;

    public function __construct($text, $tw)
    {
        $this->text = $text;
        $this->tw = $tw;
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
