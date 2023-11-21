<?php
echo "For: ";
for ($i = 0; $i <= 100; $i += 5) {
    echo $i . " ";
}

echo "<br>While: ";
$i = 0;
while ($i <= 100) {
    echo $i . " ";
    $i += 5;
}

echo "<br>do-While: ";
$i = 0;
do {
    echo $i . " ";
    $i += 5;
} while ($i <= 100);

?>