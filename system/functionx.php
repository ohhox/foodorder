<?php

class functionx {

    public function getFoodImage($image) {
        if (!empty($image)) {
            return URL . $this->PathfileUpload . "foodImage/resize/$image";
        } else {
            return URL . $this->PathfileUpload . "foodImage/imageDefault/cpg-foods-icon.png";
        }
    }

    public function getUserImage($image) {
        if (!empty($image)) {
            return URL . $this->PathfileUpload . "userImage/$image";
        } else {
            return URL . $this->PathfileUpload . "userImage/image1.jpg";
        }
    }

    public function ListFoodType() {
        return $this->db->query("SELECT * FROM  food_type WHERE ft_for_type='1' ORDER BY food_type ASC");
    }

    public function ListFoodTypeWater() {
        return $this->db->query("SELECT * FROM  food_type WHERE ft_for_type='2' ORDER BY food_type ASC");
    }

    public function getFoodTypeFromid($id) {
        return $this->db->query("SELECT * FROM  food_type WHERE food_type_id='$id' ORDER BY food_type ASC");
    }

    public function Listkitchen() {
        return $this->db->query("SELECT * FROM  kitchen WHERE for_type_food='1' ORDER BY kitchen_name ASC");
    }

    public function ListkitchenWater() {
        return $this->db->query("SELECT * FROM  kitchen WHERE for_type_food='2' ORDER BY kitchen_name ASC");
    }

    public function SHOW($param) {
        echo '<pre>';
        print_r($param);
        echo '</pre>';
    }

    public function removeFIle($file) {
        if (file_exists($file)) {
            unlink($file);
        }
    }

    public function getCountFoodOfType($ftid) {
        return $this->db->query("SELECT COUNT(*) AS sum FROM  food WHERE food_type_id='$ftid' ");
    }

}
