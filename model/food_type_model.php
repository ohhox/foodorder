<?php

class food_type_model extends Model {

    protected $table = 'food_type';
    protected $pk = 'food_type_id';

    public function __construct($data = array()) {
        parent::__construct();
    }

}
