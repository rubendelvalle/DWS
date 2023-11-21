<?php
$num = 1;
$count = 0;

while ($count < 5) {
    if ($num % 2 == 0) {
        echo $num . " ";
        $count++;
    }
    $num++;
}
?>