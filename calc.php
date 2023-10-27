<?php
// 預設$_GET=[];

if(!empty($_GET)){

    $weight=(!empty($_GET['weight']))?$_GET['weight']:'沒有體重資料';
    $height=(!empty($_GET['height']))?$_GET['height']:'沒有身高資料';

    // echo "體重:".$weight;
    // echo "身高:".$height;
    $bmi=round($weight/($height*$height),2);
    echo "體重:".$_GET['weight'];
    echo "身高:".$_GET['height'];
    header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");


}else{  

    header("location:bmi.php?m=請輸入必要的資訊");

}
