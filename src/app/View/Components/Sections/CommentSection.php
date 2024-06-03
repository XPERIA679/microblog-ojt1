<?php

namespace App\View\Components\Sections;

use Illuminate\View\Component;

class CommentSection extends Component
{
    public $postsMediumOrShare;

    public function __construct($postsMediumOrShare)
    {
        $this->postsMediumOrShare = $postsMediumOrShare;
    }

    public function render()
    {
        return view('components.sections.comment-section');
    }
}