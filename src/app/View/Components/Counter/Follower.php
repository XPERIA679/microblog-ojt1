<?php

namespace App\View\Components\Counter;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Follower extends Component
{
    public $user;

    /**
     * Create a new component instance.
     *
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|string
    {
        return view('components.counter.follower');
    }
}