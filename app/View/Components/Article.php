<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    public $isSingle;

    public function __construct($isSingle)
    {
        $this->isSingle = $isSingle;
    }


    public function render()
    {
        return view('components.articles.article');
    }
}
