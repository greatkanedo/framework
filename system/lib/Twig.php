<?php
namespace system\lib;

class Twig {

    public $_view;

    public $_params;

    public $twig;

    public $loader;

    const VIEW_PATH = __ROOT__ . '/application/Views/';

    /**
     * Twig constructor.
     * @param $view
     * @param $data
     */
    public function __construct($view, $params)
    {
        $this->_view = $view;
        $this->_params = $params;
        $this->makeLoader()->makeTwigTemplateObject();
    }

    public function makeTwigTemplateObject() {
        $this->twig = new \Twig_Environment($this->loader, ['cache' => self::getCacheFolder(), 'debug' => APP_DEBUG]);
    }

    public function makeLoader() {
        $this->loader = new \Twig_Loader_Filesystem(self::VIEW_PATH);
        return $this;
    }

    /**
     * @param $view
     * @param array $params
     * @return Twig
     */
    public function render() {
        return $this->twig->display($this->_view, $this->_params);
    }

    /**
     * [getCacheFolder description]
     * @return [type] [description]
     */
    public static function getCacheFolder() {
        return __ROOT__ . '/cache/views/';
    }
    
}