<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class CreateCommentForm extends Component
{
    public $postsMediumOrShare;
    
    public function __construct($postsMediumOrShare)
    {
        $this->postsMediumOrShare = $postsMediumOrShare;
    }

    public function render()
    {
        return view('components.forms.create-comment-form');
    }
}
