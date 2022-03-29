<?php

echo "While: " . PHP_EOL;

$i = 1;
while ($i <= 5) {
    if ($i == 2) {
        break;
    }

    echo "#$i" . PHP_EOL;
    $i++; // igual á "$i = $i + 1"
}

echo "For: " . PHP_EOL;

for ($i = 1; $i <= 5; $i++) {
    if ($i == 2) {
        continue;
    }

    echo "#$i" . PHP_EOL;
}