<?php

class order extends Controller {

    public function __construct() {
        parent::__construct();
          $this->ActiveManu = 'order';
    }

    public function index() {
        $this->getView('order/index');
    }

}
