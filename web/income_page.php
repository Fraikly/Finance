<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
require_once "AuthorizationClass.php";
$title="Доходы";
require_once "html/header.html";
?>


<?php

require_once 'BdRecordsClass.php';

$reload = false;

//COOKIE
if(isset($_COOKIE["year"])){
    setcookie("year","",time());
    $reload=true;
}


if(isset($_POST["date_filter"]))
    if($_COOKIE["date_filter"]!=$_POST["date_filter"]){
        setcookie("date_filter",$_POST["date_filter"]);
        $reload=true;
}
if(isset($_POST["category_filter"]))
    if($_COOKIE["category_filter"]!=$_POST["category_filter"]){
        setcookie("category_filter",$_POST["category_filter"]);
        $reload=true;
    }


$tableName="income";
$fileName="income_page.php";
$listName="Список доходов";
$category=BdRecordsClass::CATEGORY_INCOME;
$columns=BdRecordsClass::COLUMN_NAMES;

//if we have new record
if($_POST['name']!=null) {
    BdRecordsClass::createNewRecord($tableName,$columns);
    setcookie("cashBalance",'',time());
    $reload=true;
}

//reload page
if($reload){
    header('Location: income_page.php');
}

//get records
$all_expense=BdRecordsClass::getRecords($tableName, $category);


//sum of count
$sum=BdRecordsClass::getSumCount($all_expense);


require_once "html/body_table.html";
require_once "html/footer.html";
?>


