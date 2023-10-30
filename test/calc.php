<?php

// if(!isset($_GET)){
//     echo "體重:".$_GET['weight'];
//     echo "身高:".$_GET['height'];

// }else{

//     echo "需輸入";
// }

if(!empty($_GET)){
    if($_GET['weight']!="" && $_GET['height']!=""){
    echo "體重:".$_GET['weight'];
    echo "身高:".$_GET['height'];
    $weight=$_GET['weight'];
   $height=$_GET['height'];
    
    $bmi=round($weight/($height*$height),2);
    echo 'bmi'.$bmi;
    header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
    }else{
    header('location:bmi.php?m=無資料');
    }

}else{

    echo "需輸入";
}
