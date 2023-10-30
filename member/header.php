<header>
       <a href="index.php">回首業</a>
       <?php
       
       if(isset($_SESSION['login'])){
       ?>
       <a href="logout.php">登出</a>
       <a href="member.php">會員中心</a>
       <a href="mail.php">商城</a>
       
       <?php
}else{
       ?>
       <a href="login.php">登入</a>

<?php
}
?>
</header>
