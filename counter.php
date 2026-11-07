<?php
$file = "count.txt";
if(!file_exists($file)) {
    file_put_contents($file, "0");
}
$current = file_get_contents($file);
$current++;
file_put_contents($file, $current);
echo $current;
?>