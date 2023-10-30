<?php

if($_POST['acc']=='abc' && $_POST['pw']=="abc"){
    $_SESSION['login']=$_POST['acc'];

    header("location:member.php");
    
    // echo '帳號正確';
}else{
    $_SESSION['error']="帳密錯誤";
    header("location:member.php?m=請輸入必要的資訊");
    // echo '帳號錯誤';
}


