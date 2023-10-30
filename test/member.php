<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member</title>
</head>
<body>
<?php
if($_GET['login']==1){
    echo '登入成功';
    echo "<a href='login.php?login=1'>回登入頁</a>";
}else{
    header("location:login.php?m=帳密錯誤");

}
?>

</body>
</html>