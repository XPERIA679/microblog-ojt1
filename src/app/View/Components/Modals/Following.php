<?php

namespace App\View\Components\Modals;

use Illuminate\View\View;
use Illuminate\View\Component;

class Following extends Component
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Render create-component modal
     */
    public function render(): View
    {
        return view('components.modals.following');
    }
}
