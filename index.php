<?php
echo '<link rel="stylesheet" href="style.css">';
$today = date("l d F");
$dayWeekStr = date("l");
$dayWeek = date("w");
$dayMonth = date("d");
$month = date("m");
$year = date("Y");
echo "<table>";
echo "<tr><th>Понедельник</th><th>Вторник</th><th>Среда</th><th>Четверг</th><th>Пятница</th><th>Суббота</th><th>Воскресенье</th></tr>";
$daysOfWeekArr = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
$count = 0;
for ($i = 1; $i <= count($daysOfWeekArr); $i++) {
    $firstDayOfWeek = date("w", mktime(0, 0, 0, $month, 1, $year));
    if ($count == 0) echo "<tr>";
    if ($firstDayOfWeek == $i) {
        echo "<td>" . date("d", mktime(0, 0, 0, $month, 1, $year)) . "</td>";
        break;
    } else echo "<td></td>";
    $count++;
}
for ($i = 1; $i <= date("t"); $i++) {
    $dayOfWeek = date("d", mktime(0, 0, 0, $month, $i - 1, $year));
    if ($count == 0) echo "<tr>";
    if ($dayOfWeek == $i - 1) echo "<td>" . date("d", mktime(0, 0, 0, $month, $i, $year)) . "</td>";
    $count++;
    if ($count == 7) $count = 0;
    if ($count == 7) echo "</tr>";
}


// $count = 0;
// for ($i = 0; $i < 35; $i++) {
//     if ($count == 7) $count = 0;
//     if ($count == 0)echo "<tr>";
//     if ($count == 7)echo "<script>document.getElementBy</script>";
//     echo "<td>" . date("d", mktime(0, 0, 0, 1, $i, $year)) . "</td>";
//     if ($count == 7)echo "<tr>";
//     $count++;
// }
echo "</table>";
