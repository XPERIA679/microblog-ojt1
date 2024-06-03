<?php

namespace App\View\Components\Sections;

use Illuminate\View\View;
use Illuminate\View\Component;

class CommentSection extends Component
{
    public $postsMediumOrShare;

    public function __construct($postsMediumOrShare)
    {
        $this->postsMediumOrShare = $postsMediumOrShare;
    }

    /**
     * Render component comment section
     */
    public function render(): View
    {
        return view('components.sections.comment-section');
    }
}
