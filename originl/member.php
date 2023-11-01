<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if($_GET['login']==1){
        echo "<h3>登入成功</h3>";

    }
    else{
        header("location:login.php");
        // echo "非法登入";
    }


    ?>
</body>
</html>