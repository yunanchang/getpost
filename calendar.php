<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            border-collapse: collapse;
            border:3px double #999;

        }

        td{
            border:1px solid #999;
            padding:5px 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php 
if(isset($_GET['next'])){
    $month=$_GET['next'];
}
if(isset($_GET['prev'])){
    $month=$_GET['prev'];
}

echo "<h3>";
echo date("西元Y年 $month 月");
echo "</h3>";
$thisMonth=date("Y");
$thisFirstDay=date("Y-{$month}-1");
$thisFirstDate=date('w',strtotime($thisFirstDay));
$thisMonthDays=date("t");
$thisLastDay=date("Y-{$month}-$thisMonthDays");
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
// echo $thisFirstDate;
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstDay)));
// echo $firstCell;

?>

<div>

    <a href="?prev=".($month-1)>上一個月</a>
    <a href="?next=11">下一個月</a>
</div>
<?php
echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";

for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        $addDays=7*$i+$j;
        // echo $addDays."add<br>";
        $thisCellDate=strtotime("+$addDays days",strtotime($firstCell));
        if(date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){
            echo "<td style='background:pink'>";

        }else{
            echo "<td>";
        }
        // echo date("Y-m-d",$thisCellDate);
        if(date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))){
            echo date("j",$thisCellDate);
        }
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>    
</body>
</html>