<link rel="stylesheet" href="css/style.css" type="text/css">
<?php

require_once "BdRecordsClass.php";



//if we have new user
if(isset($_COOKIE["password_2"])){
    $tableName="users";
    $columns=BdRecordsClass::USER_COLUMN_NAMES;
    BdRecordsClass::createNewRecord($tableName,$columns);
    AuthorizationClass::Cookie("unset");
    header("Location: main_page.php");
}

$title="Главная";
require_once "AuthorizationClass.php";
require_once "html/header.html";
require_once "html/body_main.html";
require_once "html/footer.html";