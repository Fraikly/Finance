<?php

class FilterClass
{
    static function setFilter(){
        //set date
        $date_filter=self::setDateFilter();
        if($date_filter!=0){
            $now = date("Y-n-j");
            $filters['date'] ="date BETWEEN '{$date_filter}' AND '{$now}'";
        }
        else{
            $filters["date"]=null;
        }

        //set category
        $category_filter=self::setCategoryFilter();
        if($category_filter!=0){
            $filters['category']="category='{$category_filter}'";
        }
        else {
            $filters["category"]=null;
        }

        return $filters;

    }



    private static function setDateFilter(){

        if($_COOKIE["date_filter"]==null or $_COOKIE["date_filter"]=="1month"){
            $date_filter = date("Y-n-01");
        }

        else{
            switch ($_COOKIE["date_filter"]){

                case "all":
                    $date_filter  = 0;
                    break;

                case "3month":
                    $month= date("m");
                    if($month>3)
                        $month-=2;
                    else
                        $month+=10;
                    $date_filter = date("Y-{$month}-01");
                    break;

                case "year":
                    $date_filter = date("Y-01-01",);
                    break;
            }
        }
        return $date_filter;
    }

    private static function setCategoryFilter(){
        if($_COOKIE["category_filter"]=="all" or $_COOKIE["category_filter"]==null )
            return 0;
        else
            return BdRecordsClass::CATEGORY[$_COOKIE['category_filter']];

    }
}