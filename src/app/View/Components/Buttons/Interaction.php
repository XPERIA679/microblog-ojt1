<?php

namespace App\View\Components\Buttons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Interaction extends Component
{
    public $postsMediumOrShare;

    /**
     * Create a new component instance.
     *
     */
    public function __construct($postsMediumOrShare)
    {
        $this->postsMediumOrShare = $postsMediumOrShare;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|string
    {
        return view('components.buttons.interaction');
    }
}
