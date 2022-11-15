<?php


//connecting the db
require 'index.php';



 class BdRecordsClass
{
    const COLUMN_NAMES=['name', 'category', 'count', 'date'];
    const CATEGORY = [
        "noName" =>"Без названия",
        "entertainment" => "Развлечение",
        "food" => "Еда",
        "health" => "Здоровье",
        "other" => "Другое"];
    const DATE_FILTER=[
        "1month" => "Месяц",
        "3month" => "3 Месяца",
        "year" => "Год",
        "all" => "За все время"];

   static function createNewRecord($tableName){
        $table = R::dispense($tableName);

        foreach (self::COLUMN_NAMES as $column){
            $table->$column= $_POST[$column];
        }

        R::store($table);
    }


    static function getRecords($tableName){
        require 'FilterClass.php';
        $filters=FilterClass::setFilter();

        $request="SELECT * FROM {$tableName}";

        //if we have filter
        if($filters['date']!=null or $filters['category']!=null){
            $request.=" WHERE ";

            if($filters["date"]!=null)
                $request.=$filters['date'];

            if($filters['date']!=null and $filters['category']!=null)
                $request.=" AND ";

            if($filters["category"]!=null)
                $request.=$filters['category'];

        }

        $all_records=R::getAll($request);

        //if we got no one records
        if($all_records==null){
            $all_records= self::getNullRecord();
        }

        return $all_records;
    }

    private static function getNullRecord(){
        $all_records[0]['name']="Нет информации";
        $all_records[0]['category']="Без категории";
        $all_records[0]['count']="0";
        $all_records[0]['date']="-";
        return $all_records;
    }

    static function getSumCount($all_records){
       $sum=0;
        foreach ($all_records as $value){
            $sum+=$value["count"];
        }
        return $sum;
    }

}