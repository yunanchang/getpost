<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{box-sizing: 0;}
        .container{background-color: saddlebrown;
            display: flex;
            font-family:'Bradley Hand ITC'; font-size: 50px;}
        .img{width: 35%;
            height: 100vh;
        background-color: lightgray}
        .date{width: 65%;
            height: 100vh;
        background-color: lavenderblush;
        margin: auto;
        text-align: center;
    }
    table{text-align: center;
    margin: auto;}
    </style>
</head>
<body>
<div class="container">
    <div class="img">
                   img
    </div>
    <div class='date'>
    <?php
 include_once('date.php');
 ?>
 </div>

</div>
</body>
</html>