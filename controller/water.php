<?php

class water extends Controller {

    public $data;

    public function __construct() {
        parent::__construct();
        $this->ActiveManu = 'water';
    }

    public function index() {
        $this->loadModel('food');
        $this->data = $this->model->query(""
                . " SELECT *,f.food_type_id AS ftid,f.food_id AS fid,f.kitchen_id AS kid FROM food AS f"
                . " LEFT JOIN food_type AS ft ON f.food_type_id = ft.food_type_id "
                . " LEFT JOIN kitchen AS k ON f.kitchen_id = k.kitchen_id "
                . " WHERE ft.ft_for_type='2' "
                . " ORDER BY ft.food_type ASC, f.food_id ASC");
        $this->getView('water/index');
    }

    public function food_form($id = 0) {
        $this->loadModel('food');
        if (!empty($_POST)) {

            $data = $_POST;
            
            if (!empty($_FILES['foodImage']['name'])) {
                $temp = explode(".", $_FILES["foodImage"]["name"]);
                $newfilename = rand(1, 500) . round(microtime(true)) . '.' . end($temp);
                $path = $this->PathfileUpload . 'foodImage/' . $newfilename;
                move_uploaded_file($_FILES['foodImage']['tmp_name'], $path);


                require 'system/resizeImage.php';
                $resize = new ResizeImage($path);
                $resize->resizeTo(500, 500, 'maxHeight');
                $newPath = $this->PathfileUpload . 'foodImage/resize/' . $newfilename;
                $resize->saveImage($newPath);

                $data['food_image'] = $newfilename;
                if (!empty($id != 0)) {
                    $this->model->find($id);
                    $this->removeFIle($this->PathfileUpload . 'foodImage/resize/' . $this->model->variables['food_image']);
                    $this->removeFIle($this->PathfileUpload . 'foodImage/' . $this->model->variables['food_image']);
                }
            }

            $this->SHOW($data);
            $this->model->__setMultiple($data);
            if ($id != 0) {
                $this->model->save($id);
            } else {
                $this->model->create();
            }

            header('Location: ' . URL . 'water');
        } else {
            if (!empty($id != 0)) {
                $this->model->find($id);
            }
            $this->getView('water/food_form');
        }
    }

    public function removeFood($id) {
        $this->loadModel('food');
        $this->model->delete($id);
        echo 'OK';
    }

    public function foodType() {
        $this->ActiveManuCat = 'waterType';
        $this->loadModel('food_type');
        if (!empty($_POST)) {
            $this->model->__set('food_type', $_POST['food_type']);
            $this->model->__set('ft_for_type', '2');
            $this->model->create();
            header('Location: ' . URL . 'water/foodType');
        }
        $this->data = $this->model->all('WHERE ft_for_type="2" ORDER BY food_type ASC');
        $this->getView('water/footType');
    }

    public function foodTypeOrder() {
        $this->loadModel('food_type');
        foreach ($_POST['order'] as $key => $value) {
            //echo $key . '>' . $value . '<br/>';
            $this->model->__set('food_type_number', $value);
            $this->model->save($key);
        }
        header("Location: " . URL . 'water/foodType');
    }

    public function foodTypeEdit($id) {
        $this->loadModel('food_type');
        if (!empty($_POST)) {
            $this->SHOW($_POST);
            $this->model->__set('food_type', $_POST['food_type']);
            $this->model->save($id);
            exit();
        }
        $this->model->find($id);
        ?>
        <form action="<?= URL ?>water/foodTypeEdit/<?= $id ?>" id="FootTypeEditx" method="post">            
            <input type="text" name="food_type" value="<?= $this->model->__get('food_type') ?>" class="form-control">            

        </form>

        <script type="text/javascript">
            $(function () {
                $('#SaveEdit').on('click', function () {
                    $('#FootTypeEditx').submit();
                });
                $('#FootTypeEditx').on('submit', function () {
                    var url = $(this).attr('action');
                    $.ajax({
                        url: url,
                        data: $(this).serialize(),
                        method: 'POST'
                    }).done(function () {
                        $("#CloseModal").click();
                        noti('แจ้งเตือน', 'แก้ไขข้อมูลเรียบร้อย');
                        setTimeout(function () {
                             location.reload();
                        }, 1500);
                    });

                    return false;
                });
            });
        </script>
        <?php
    }

    public function foodTypeRemove($id) {
        $this->loadModel('food_type');
        $this->model->delete($id);
        echo 'OK';
    }

    public function kitchen() {
        $this->ActiveManuCat = 'waterType';
        $this->loadModel('kitchen');
        if (!empty($_POST)) {
            $this->model->__set('kitchen_name', $_POST['kitchen_name']);
            $this->model->__set('for_type_food','2');
            $this->model->create();
            header('Location: ' . URL . 'water/kitchen');
        }
        $this->data = $this->model->all('WHERE for_type_food = "2" ORDER BY kitchen_name ASC');
        $this->getView('food/kitchen');
    }

    public function kitchenEdit($id) {
        $this->loadModel('kitchen');
        if (!empty($_POST)) {
            $this->SHOW($_POST);
            $this->model->__set('kitchen_name', $_POST['kitchen_name']);
            $this->model->save($id);
            exit();
        }
        $this->model->find($id);
        ?>
        <form action="<?= URL ?>food/kitchenEdit/<?= $id ?>" id="FootTypeEditx" method="post">
            <input type="hidden" name="kitchen_id" value="<?= $id ?>">
            <input type="text" name="kitchen_name" value="<?= $this->model->__get('kitchen_name') ?>" class="form-control">            

        </form>

        <script type="text/javascript">
            $(function () {
                $('#SaveEdit').on('click', function () {
                    $('#FootTypeEditx').submit();
                });
                $('#FootTypeEditx').on('submit', function () {
                    var url = $(this).attr('action');
                    $.ajax({
                        url: url,
                        data: $(this).serialize(),
                        method: 'POST'
                    }).done(function () {
                        $("#CloseModal").click();
                        noti('แจ้งเตือน', 'แก้ไขข้อมูลเรียบร้อย');
                        setTimeout(function () {
                            //  location.reload();
                        }, 5500);
                    });

                    return false;
                });
            });
        </script>
        <?php
    }

    public function kitchenRemove($id) {
        $this->loadModel('kitchen');
        $this->model->delete($id);
        echo 'OK';
    }

}
