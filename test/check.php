<?php
if($_POST['acc']=='abc'&& $_POST['pw']='abc'){
    header("location:member.php?login=1");
    echo "right";
}else{
    header("location:member.php?m=帳密錯誤");
    echo 'false';
}

?>


