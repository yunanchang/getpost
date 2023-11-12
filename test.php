<?php
// 函數用於生成選項
function generateOptions($start, $end, $label) {
    $options = "<label for=\"$label\">$label:</label>";
    $options .= "<select id=\"$label\" name=\"$label\">";
    for ($i = $start; $i <= $end; $i++) {
        $options .= "<option value=\"$i\">$i</option>";
    }
    $options .= "</select>";
    return $options;
}


// 設定起始和結束年、月
$startYear = 1950;
$endYear = 2050;
$startMonth = 1;
$endMonth = 12;

// HTML 部分
echo '<form>';
echo generateOptions($startYear, $endYear, 'year');
echo generateOptions($startMonth, $endMonth, 'month');
echo '<input type="submit" value="顯示月曆">';
echo '</form>';
$a=2;
$b=1;
$b.=$a;
echo $b;

// 在這裡你可以加入顯示月曆的邏輯
?>

<style>
    /* 在這裡添加一些 CSS，以樣式化你的月曆 */
</style>