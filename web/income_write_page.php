<link rel="stylesheet" href="css/style.css" type="text/css">

<?php
require_once "AuthorizationClass.php";
$title="Создание новой записи";
require_once "html/header.html";

require_once 'BdRecordsClass.php';

$listName="Прибыль";
$category =BdRecordsClass::CATEGORY_INCOME;
require_once 'html/body_write.html';




require_once "html/footer.html";
?>
