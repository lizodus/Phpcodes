<!DOCTYPE html>
<html>
<body>
  <form method="post">
    Enter Start Number
    <input type="number" name="start" /><br><br>
    Enter End Number
    <input type="number" name="end" /><br><br>
    <input type="submit" name="submit" value="range">
  </form>


<?php

function collectRange($start, $end)
{
    $range = [];

    $num = $end - $start;

    for ($i=0; $i <= $num; $i++) {
        $range[$i] = $start++;
    }

    return $range;
}

$range = collectRange(5, 15);

var_dump($range)."<br>";



function getSum($array)
{
    $sum = 0;

    for ($i=0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    return $sum;
}

echo " Sum of range is ..... ";

echo getSum($range);

?>

</body>
</html>
