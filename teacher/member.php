<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
<?php
if($_GET['login']==1){
    echo "<h3>登入成功</h3>";
    echo "<a href='login.php?login=1'>回登入頁</a>";
}else{
    header("location:login.php");
    //echo "沒有登入相關驗證，非法登入";
}

?>

</body>
</html>