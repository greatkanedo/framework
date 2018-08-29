<?php
namespace system;

use system\lib\Twig;

class Controller {

    public $_view = null;

    public $_class = null;

    /**
     * [__construct description]
     */
    public function __construct() {
        $this->_class = explode('\\', get_called_class())[2] . '/';
    }

    final public function render($view, $params = []) {
        return (new Twig($this->_class . $this->checkViewExists($view), $params))->render();
    }
    
    final public function checkViewExists($view) {
        $this->_view = $view;
        if (@file_exists($this->getTemplatePath() . $this->_view . '.php')) {
            return $this->_view . '.php';
        } else if (@file_exists($this->getTemplatePath() . $this->_view . '.html')) {
            return $this->_view . '.html';
        } else {
            throw new \Exception('The template file is not exists.');
        }
    }

    final public function getTemplatePath() {
        return Twig::VIEW_PATH . $this->_class . '/';
    }

    public function redirect() {}
}