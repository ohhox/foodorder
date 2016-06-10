<?php

class kitchen_model extends Model {

    protected $table = 'kitchen';
    protected $pk = 'kitchen_id';

    public function __construct($data = array()) {
        parent::__construct();
    }

}
