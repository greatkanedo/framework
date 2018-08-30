<?php
namespace system\lib;

class Twig {

    public $_view;

    public $_params;

    public $twig;

    public $loader;

    const VIEW_PATH = __ROOT__ . '/application/Views/';

    /**
     * View and param initalize.
     * @param $view String View name
     * @param $data Array  data array
     */
    public function __construct($view, $params)
    {
        $this->_view = $view;
        $this->_params = $params;
        $this->makeLoader()->makeTwigTemplateObject();
    }

    /**
     * This function will make a twig object.
     */
    public function makeTwigTemplateObject() {
        $this->twig = new \Twig_Environment($this->loader, ['cache' => self::getCacheFolder(), 'debug' => APP_DEBUG]);
    }

    /**
     * Make a file system object of twig.
     * @return Object This class's object.
     */
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
     * Return view's full path, but not view.
     * @return [type] [description]
     */
    public static function getCacheFolder() {
        return __ROOT__ . '/cache/views/';
    }
    
}