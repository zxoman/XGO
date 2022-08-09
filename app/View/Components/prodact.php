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
    public $like;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $image, $price, $id, $cart,$like)
    {
        $this->text = $text;
        $this->image = $image;
        $this->price = $price;
        $this->id = $id;
        $this->cart = $cart;
        $this->like = $like;
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
