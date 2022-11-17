<link rel="stylesheet" href="css/style.css" type="text/css">

<?php
$title="Создание новой записи";
require_once "html/header.html";

require_once 'BdRecordsClass.php';
$listName="Затрата";
$category =BdRecordsClass::CATEGORY_EXPENSE;
require_once 'html/body_write.html';




require_once "html/footer.html";
?>
