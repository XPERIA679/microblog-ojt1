<?php

namespace App\View\Components\Modals;

use Illuminate\View\View;
use Illuminate\View\Component;

class CreateCommentModal extends Component
{
    public $postsMediumOrShare;

    public function __construct($postsMediumOrShare)
    {
        $this->postsMediumOrShare = $postsMediumOrShare;
    }

    /**
     * Render create-component modal
     */
    public function render(): View
    {
        return view('components.modals.create-comment-modal');
    }
}
