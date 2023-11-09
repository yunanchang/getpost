<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            box-sizing: 0;
        }

        .container {
            margin: auto;
            background-color: saddlebrown;
        
            /* font-family:'Bradley Hand ITC'; */
            font-size: 50px;
            width: 80%;
            height:80hv;
            display: flex;
            justify-content: center; /* 水平居中 */
            align-items: center; 
        }

        .aside {
            width: 35%;
            height: 100vh;
            background-color: lightgray;
            display: flex;
            flex-direction:column;
            
            
        }
        .current-time{background-color:green;
            height: 15%;
        display: flex;      
        justify-content:center;
        align-items:center;
        
        }
      
        .date {
            width: 65%;
            height: 100vh;
            background-color: lavenderblush;
            margin: auto;
            text-align: center;
            
        }
        #time{
        /* background-color: sandybrown; */
        /* padding-left: 10px; */
       
    }
        .img{background-color:bisque;
        height: 85%;
        }
       a{
         
            text-decoration: none;}



        table {
                width: 100%;
                height: 70%;
            
        }   
    </style>
</head>

<body>
    <div class="container">
        <div class="aside">
            <div class="current-time">
            
            
            <?php
            // ww
            if (isset($_GET['month']) && isset($_GET['year'])) {
                $month = $_GET['month'];
                $year = $_GET['year'];
            } else {
                $month = date('m');
                $year = date("Y");
            }
            // ww
             date_default_timezone_set('Asia/Taipei');
             echo date('Y/m/d');
            
            ?>
            <!-- js -->
    
    <i class="fa-solid fa-clock fa-bounce"></i>
    <div id="time"></div>
  
    <script>
        function updateTime() {
            const timeElement = document.getElementById('time');
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const currentTime = `${hours}:${minutes}:${seconds}`;
            timeElement.textContent = currentTime;
        }

        updateTime(); // 初始调用 updateTime 函数

        setInterval(updateTime, 1000); // 每秒更新一次时间
    </script>
     <!-- js -->
            
            </div>
            
            <div class="img">

                <?php
                
               
                echo '<img src="./img/'. $month .'.jpeg" alt="" width="100%" height="100%">';
                ?>
                
            </div>
        
            
        </div>
        
        <div class='date'>
            <?php
            include_once('date.php');
            ?>
        </div>

    </div>
    
</body>

</html>