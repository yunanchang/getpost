<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pin</title>
</head>
<body>
    <h2>pin</h2>
    <?php
    if(!isset($_GET['bmi'])){

        if(isset($_GET['m'])){
            echo "<span style='color:red'>".$_GET['m']."</span>";
        }
    ?>
    <form action="pin02.php">
        <!--
 體重(公斤)/身高(公尺)的平方
-->

        <div>
            <label for="height">帳號</label>
            <input type="text" name='height' id='height'>
        </div>
        <div>
            <label for="weight">密碼</label>
            <input type="password" name='weight' id='weight'>
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value='重製'>
        </div>
    </form>
    <?php
}else{
    echo "體重:".$_GET['w']."公斤";
    echo "<BR>";
    echo "身高:".$_GET['h']."公尺";
    echo "<BR>";
    echo "BMI:".$_GET['bmi'];  
    echo "<BR>";

}
?>
</body>
</html>
<?php
// header("location:index.php")
// header("location:target.php?error=fail");
?>