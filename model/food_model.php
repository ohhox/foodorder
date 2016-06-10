<?php

class food_model extends Model {

    protected $table = 'food';
    protected $pk = 'food_id';

    public function __construct($data = array()) {
        parent::__construct();
    }

}
