<?php
require 'index.php';
if($_POST!=null) {
    $exspense = R::dispense("expenses");
    $exspense->name = $_POST['name_expense'];
    $exspense->category = $_POST['category'];
    $exspense->count = $_POST['count'];
    $exspense->date = $_POST['date'];
    R::store($exspense);
}

$all_expense=R::findAll("expenses");

$sum=0;
foreach ($all_expense as $value){
    $sum+=$value["count"];
}

echo $sum;
?>
