<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
$title="Расходы";
require_once "html/header.html";
?>


<?php

//connecting the db
require 'index.php';

//if we have new record
if($_POST['name_expense']!=null) {
    $exspense = R::dispense("expenses");

    $exspense->name = $_POST['name_expense'];
    $exspense->category = $_POST['category'];
    $exspense->count = $_POST['count'];
    $exspense->date = $_POST['date'];

    R::store($exspense);

    header('Location: expense_page.php');
}


//default filter
$filter=date("Y-n-01");;

//update filter
if($_POST["date_filter"]!=null and $_POST["date_filter"]!="1 month")
{
    switch ($_POST["date_filter"]){
        case "all":
            $filter  = 0;
            break;

        case "3 month":
            $month= date("m");
            if($month>3)
                $month-=2;
            else
                $month+=10;
            $filter = date("Y-{$month}-01");
            break;

        case "year":
            $filter = date("Y-01-01",);
            break;
    }
}

//all records with accounting date
if($filter!=0){
    $now = date("Y-n-j");
    $all_expense=R::getAll("SELECT * FROM expenses WHERE date BETWEEN '{$filter}' AND '{$now}'");


}

//all records without date
else{
    $all_expense=R::findAll("expenses");
}

//default sum
$sum=0;

//if we dont have records
if($all_expense==null){
    $all_expense[0]['name']="Нет информации";
    $all_expense[0]['category']="Без категории";
    $all_expense[0]['count']="0";
    $all_expense[0]['date']="-";
}

//amount of expenses
else{
    foreach ($all_expense as $value){
        $sum+=$value["count"];
}
}
require_once "html/body_table.html";
require_once "html/footer.html";
?>


