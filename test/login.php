<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member</title>
    <style>
        .login-block{
            padding: 10px 20px;
            border: 1px solid #999;
            box-shadow: 2px 2px 15px #999;
            margin:10px auto;
            width: 300px; ;
        }
        .login-input{
            margin: 10px;
        }
        .login-input input[type="text"]{
            border:1px solid blue;
        }
        .login-input input{
            font-size: 20px;
            padding: 5px;
            background-color: lightcoral;
        }
        .btn input{
   
        padding: 5px 10px;
        border: 1px solid green;
        border-radius: 5px;
        margin: 5px;
        
      
        }
    </style>
</head>

<body>
<div class='login-block'>
    <?php
   
    if(isset($_GET['m'])){
        echo "<span style='color:red'>".$_GET['m']."</span>";
    }
    
    if(isset($_GET['login']) && $_GET['login']==1){
        echo "歡迎你";
    }else{
    ?>
    
        <form action="check.php" method="post">
        <div class='login-input'>
            <label for="acc">acc</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div class='login-input'>
            <label for="pw">pw</label>
            <input type="password" name="pw" id="pw">

        </div>
        <div class="btn">
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </div>
        </form>
        <?php
}
?>
</div>
</body>

</html>