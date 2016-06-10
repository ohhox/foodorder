<?php

class system_model extends Model{
    
    protected $table = 'system';
    protected $pk = '';

    public function __construct($data = array()) {
        parent::__construct();
    }
}