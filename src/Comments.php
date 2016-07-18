<?php

namespace klxdr\hc;

class Comments extends Widget
{
    /**
     * @inheritdoc
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        $this->view = 'hc-comments';
        parent::init();
    }
}