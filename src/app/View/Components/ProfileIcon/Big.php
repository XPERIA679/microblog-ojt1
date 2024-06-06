<?php

namespace App\View\Components\ProfileIcon;

use Illuminate\View\View;
use Illuminate\View\Component;

class Big extends Component
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Render component comment section
     */
    public function render(): View
    {
        return view('components.profile-icon.big');
    }
}
