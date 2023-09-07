<?php
// 获取当前日期
$currentDate = date('Y-m-d');

echo strtotime($currentDate);
// 获取当前月份的最后一天
$lastDayOfMonth = date('Y-m-t', strtotime($currentDate));
 
// 输出最后一天
echo $lastDayOfMonth;
?>