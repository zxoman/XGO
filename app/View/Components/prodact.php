<?php

namespace App\View\Components;

use Illuminate\View\Component;

class prodact extends Component
{
    public $text;
    public $image;
    public $price;
    public $id;
    public $cart;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $image, $price, $id, $cart)
    {
        $this->id = $id;
        $this->text = $text;
        $this->image = $image;
        $this->price = $price;
        $this->cart = $cart;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.prodact');
    }
}
