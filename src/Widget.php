<?php

namespace klxdr\hc;

use yii\base\InvalidConfigException;
use yii\helpers\Inflector;

class Widget extends \yii\base\Widget
{
    /**
     * @var string
     */
    public $siteid;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var string the language to dynamically load
     */
    public $language='ru';
    /**
     * @var string the view to use. It is used internally by child classes.
     */
    protected $view;
    /**
     * @var array the parameters to pass to the view. It is used internally by child classes.
     */
    protected $params = [];

    /**
     * @inheritdoc
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        if (empty($this->siteid)) {
            throw new InvalidConfigException('"siteid" cannot be empty.');
        }
        $this->params['variables'] = $this->variablize();
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo $this->render($this->view, $this->params);
    }

    /**
     * Converts the public variables to js configuration variables
     * @return string
     */
    protected function variablize()
    {
        $vars = [];
        $class = new \ReflectionClass(Widget::className());
        foreach ($class->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {

            if (!$property->isStatic()) {
                $name = $property->getName();
                if (!empty($this->{$name})) {
                    $vars[] = 'var hc_' . Inflector::underscore($name) . '=' .
                        ($name == 'disableMobile' ? $this->{$name} : '"' . $this->{$name} . '"') . ';';
                }
            }
        }
        return implode("\n\t", $vars);
    }
}