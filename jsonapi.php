<?php
$items = array();
for($i = 0; $i < 10; $i++) {
$items[$i] = "This is message of Jagdeep Singh $i";
}
header('Content-Type: application/json');
$jsonOutput = json_encode($items);
echo $jsonOutput;
