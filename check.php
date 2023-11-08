<?php
date_default_timezone_set("Asia/Taipei");
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){

    setcookie("login","mackliu",time()+60);

    header("location:member.php");

if($_POST['acc']=='abc' && $_POST['pw']=="abc"){
    header("location:member.php?login=1");
    echo '帳號正確';
}else{
    header("location:member.php?m=請輸入必要的資訊");
    echo '帳號錯誤';
}
?>