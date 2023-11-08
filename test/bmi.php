<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBMI</title>
</head>
<body>
    <H2>算BMI</H2>
<?php
if(!isset($_GET['bmi'])){
    if(isset($_GET['m'])){
        echo "<span style='color:red'>".$_GET['m']."</span>";
    }


?>
  <form action="calc.php" method="get">

    <div>
        <label for="weight">weight</label>
        <input type="text" name="weight" id="weight">
    </div>
    <div>
        <label for="height">height</label>
        <input type="text" name="height" id="height">
    </div>
    <div>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
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