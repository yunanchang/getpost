<?php
// 預設$_GET=[];

if(!empty($_GET)){

    $weight=(!empty($_GET['weight']))?$_GET['weight']:'沒有帳號資料';
    $height=(!empty($_GET['height']))?$_GET['height']:'沒有密碼資料';

    // echo "體重:".$weight;
    // echo "身高:".$height;
    
    if($_GET['weight']=='abc'&& $_GET['height']=="abc"){
        echo '帳號正確';
    }else{
        echo '帳號錯誤';
    }

    // header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");


}else{  

    header("location:bmi.php?m=請輸入必要的資訊");

}
