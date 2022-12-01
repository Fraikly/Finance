<link rel="stylesheet" href="css/style.css" type="text/css">

<?php
require_once 'BdRecordsClass.php';
$warning = false;
//if we have new account
if(isset($_POST["name"])){
    require_once "AccountClass.php";
    if(AccountClass::isNewName()){
        BdRecordsClass::createNewRecord('account',BdRecordsClass::ACCOUNT_COLUMN_NAMES);
        header('Location: main_page.php');
    }
    else
        $warning = true;
}


require_once "AuthorizationClass.php";
$title="Создание нового счета";
require_once "html/header.html";
require_once 'html/body_account_write.html';
require_once "html/footer.html";
?>
