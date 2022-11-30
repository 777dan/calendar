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
$count = 0;
for ($i = 0; $i < 35; $i++) {
    if ($count == 7) $count = 0;
    if ($count == 0)echo "<tr>";
    if ($count == 7)echo "<script>document.getElementBy</script>";
    echo "<td>" . date("d", mktime(0, 0, 0, 1, $i, $year)) . "</td>";
    if ($count == 7)echo "<tr>";
    $count++;
}
echo "</table>";