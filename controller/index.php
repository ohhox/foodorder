<?php
class index extends Controller{
    public function __construct() {
           parent::__construct();
    }
    public function index() {
        $this->getView('index/index');
    }
}