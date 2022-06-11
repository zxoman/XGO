<?php

namespace App\View\Components;

use Illuminate\View\Component;

class special extends Component
{
    public $text;
    public $image;
    public $details;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $image, $details)
    {
        $this->text = $text;
        $this->image = $image;
        $this->details = $details;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.special');
    }
}
