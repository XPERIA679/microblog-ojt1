<?php

namespace App\View\Components\Forms;

use Illuminate\View\View;
use Illuminate\View\Component;

class CreateCommentForm extends Component
{
    public $postsMediumOrShare;
    
    public function __construct($postsMediumOrShare)
    {
        $this->postsMediumOrShare = $postsMediumOrShare;
    }

    /**
     * Render create-component form
     */
    public function render(): View
    {
        return view('components.forms.create-comment-form');
    }
}
