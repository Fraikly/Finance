<?php
include 'info.php';
//const HOST = 'localhost';
//const DBNAME = '';
//const USERNAME='root';
//const PASSWORD='';

require_once'../vendor/autoload.php';
class_alias('\RedBeanPHP\R', '\R');


R::setup( "mysql:host=" . HOST . ";dbname=". DBNAME,
    USERNAME, PASSWORD, false);


if(!R::testConnection()){
    die("No connection");
}


