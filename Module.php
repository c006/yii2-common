<?php

namespace c006\common;

use Yii;

/**
 * Class Module
 *
 * @package c006\common
 */
class Module extends \yii\base\Module
{

    /**
     * @var string
     */
    public $controllerNamespace = 'c006\common\controllers';


    public $loginPath = '/';

    /**
     *
     */
    public function init()
    {
        parent::init();
    }


    /**
     * Override createController()
     *
     * @link https://github.com/yiisoft/yii2/issues/810
     * @link http://www.yiiframework.com/forum/index.php/topic/21884-module-and-url-management/
     */
    public function createController($route)
    {
        preg_match('/(default)/', $route, $match);
        if (isset($match[0]))
            return parent::createController($route);
        $this->defaultRoute = (!$this->defaultRoute || $this->defaultRoute == 'default') ? 'common' : $this->defaultRoute;
        if (sizeof(explode('/', $route)) > 1) {
            list($this->defaultRoute, $route) = explode('/', $route);
        }

        return parent::createController("{$this->defaultRoute}/{$route}");
    }
}
