<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $warna;
    public $link;
    public $modal;
    public function __construct($warna, $link, $modal)
    {
        $this->warna = $warna;
        $this->link = $link;
        $this->modal = $modal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
