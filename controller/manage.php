<?php

class manage extends Controller {

    public function __construct() {
        parent::__construct();
        $this->ActiveManu = 'manage';
    }

    public function index() {
        $this->loadModel('system');
        if (!empty($_POST)) {
            if ($_GET['op'] == 'updateTable') {

                $this->model->__set('numoftable', $_POST['numoftable']);
                $this->model->save();
                header('Location: ' . URL . 'manage');
            }
        }
       $this->data =  $this->model->all();
        $this->getView('table/index');
    }

}
