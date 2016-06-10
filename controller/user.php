<?php

class user extends Controller {

    public function __construct() {
        parent::__construct();
        $this->ActiveManu = 'user';
    }

    public function index($id = NULL) {
        $this->loadModel('user');
        global $USERTYPE;
        $this->UserType = $USERTYPE;
        $this->data = $this->model->all('ORDER BY user_level ASC');
        $this->webTitle = 'จัดการผู้ใช้งาน : ';
        $this->getView('user/index');
    }

    public function user_form($id = 0) {
        if (!empty($_POST)) {
            $this->loadModel('user');
            $data = $_POST;

            if (!empty($_FILES['user_image']['name'])) {
                $temp = explode(".", $_FILES["user_image"]["name"]);
                $newfilename = rand(1, 500) . round(microtime(true)) . '.' . end($temp);
                $path = $this->PathfileUpload . 'userImage/' . $newfilename;
                move_uploaded_file($_FILES['user_image']['tmp_name'], $path);


                require 'system/resizeImage.php';
                $resize = new ResizeImage($path);
                $resize->resizeTo(250, 250, 'maxHeight');
                $newPath = $this->PathfileUpload . 'userImage/' . $newfilename;
                $resize->saveImage($newPath);

                $data['user_image'] = $newfilename;
                if (!empty($id != 0)) {
                    $this->model->find($id);
                    $this->removeFIle($this->PathfileUpload . 'userImage/' . $this->model->__get('user_image'));
                }
            }
            $this->model->__setMultiple($data);
            if ($id != 0) {
                $this->model->save($id);
            } else {
                $this->model->create();
            }
            header('Location: ' . URL . 'user');
        } else {
            global $USERTYPE;
            if ($id != 0) {
                $this->model->find($id);
            }
            $this->UserType = $USERTYPE;
            $this->getView('user/form');
        }
    }

}
