<?php

if($_POST['acc']=='abc' && $_POST['pw']=="abc"){
    header("location:member.php?login=1");
    echo '帳號正確';
}else{
    header("location:member.php?m=請輸入必要的資訊");
    echo '帳號錯誤';
}
