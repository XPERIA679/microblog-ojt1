<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;

class CreateCommentModal extends Component
{
    public $postsMediumOrShare;

    public function __construct($postsMediumOrShare)
    {
        $this->postsMediumOrShare = $postsMediumOrShare;
    }

    public function render()
    {
        return view('components.modals.create-comment-modal');
    }
}