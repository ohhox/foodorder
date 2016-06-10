<?php

class user_model extends Model {

    protected $table = 'user';
    protected $pk = 'user_id';

    public function __construct($data = array()) {
        parent::__construct();
    }
}
