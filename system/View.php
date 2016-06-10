<?php

class View extends functionx {

    protected $viewPath = 'view/';
    protected $viewLayoutsPath = 'view/layouts/';
    protected $CSSPath = URL . 'source/css/';
    protected $JSPath = URL . 'source/js/';
    public $ActiveManu = 'index';
    public $ActiveManuCat = 'index';

    function __construct() {
        
    }

    public function getView($file) {
        #Reqire Head
        if (file_exists($this->viewLayoutsPath . $this->layouts . '/head.php')) {
            require $this->viewLayoutsPath . $this->layouts . '/head.php';
        }
        #Reqire Left Bar
        if (file_exists($this->viewLayoutsPath . $this->layouts . '/leftManu.php')) {
            require $this->viewLayoutsPath . $this->layouts . '/leftManu.php';
        }
        #Reqire View
        if (file_exists($this->viewPath . $file . '.php')) {
            require_once $this->viewPath . $file . '.php';
        } else {
            $this->_ERRORVIEW($file);
        }

        #Reqire Foot
        if (file_exists($this->viewLayoutsPath . $this->layouts . '/foot.php')) {
            require $this->viewLayoutsPath . $this->layouts . '/foot.php';
        }
    }

    public function _ERRORVIEW($file) {
        echo 'File Not Found : ' . $this->viewPath . $file . '.php';
    }

}
