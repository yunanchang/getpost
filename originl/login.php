<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <div class='login-block'>
    <?php
    if(isset($_GET['m'])){
        echo "<span style='color:red'>".$_GET['m']."</span>";
    }

    ?>
        <form action="check.php" method="post">
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pw">密碼:</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value='重製'>
        </div>
        </form>

    </div>
</body>
</html>