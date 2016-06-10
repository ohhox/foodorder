<?php

define('_DBHOST', 'localhost');
define('_DBUSERNAME', 'root');
define('_DBPASSWORD', '');
define('_DBNAME', 'food');
define('URL', 'http://' . $_SERVER['HTTP_HOST'] . '/foodOrder/');
define('_WEB_TITLE_', 'ระบบจัดการร้านอาหาร');
 

$USERTYPE = array(
    1 => 'ผู้จัดการ',
    2 => 'แคชเชียร์',
    3 => 'พนักงานรับออเดอร์'
);
