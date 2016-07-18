<?php

namespace klxdr\hc;

class CommentsCount extends Widget
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->view = 'hc-comments-count';
        parent::init();
    }
}