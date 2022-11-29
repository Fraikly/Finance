<?php
setcookie("username",'',time());
setcookie("date_filter",'',time());
setcookie("cashBalance",'',time());
setcookie("year",'',time());
header("Location: main_page.php");