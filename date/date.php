<?php
    if (isset($_GET['month']) && isset($_GET['year'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
    } else {
        $month = date('m');
        $year = date("Y");
    }
    echo "<h3>";
    echo date("西元 $year 年 $month 月");
    echo '<br>';
    date_default_timezone_set('Asia/Taipei');
    echo date('m/d H:i:s');
    echo "</h3>";
    
    $thisFirstDay = date("{$year}-{$month}-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    $thisMonthDays = date("t" ,strtotime("{$year}-{$month}") );
    $thisLastDay = date("{$year}-{$month}-$thisMonthDays");
    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    // echo $thisFirstDate;
    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    // echo $firstCell;
    $nextYear = $year;
    $prevYear = $year;
    if (($month + 1) > 12) {
        $next = 1;
        $nextYear = $year + 1;
    } else {
        $next = $month + 1;
    }

    if (($month - 1) < 1) {
        $prev = 12;
        $prevYear = $year - 1;
    } else {
        $prev = $month - 1;
    }

    // echo $thisMonthDays ;
    // echo $thisFirstDate ;
    // echo $weeks;
    ?>

    <div>

        <a href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>">上一個月</a>
     
        <a href="?year=<?= $nextYear; ?>&month=<?= $next; ?>">下一個月</a>
    </div>
    <table >
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
        <?php
        for ($i = 0; $i < $weeks; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                $addDays = 7 * $i + $j;
                // echo $addDays."add<br>";
                $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
                if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                    echo "<td style='background:pink'>";
                } else {
                    echo "<td>";
                }
                // echo date("Y-m-d",$thisCellDate);
                if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                    echo date("j", $thisCellDate);
                }
                echo "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>