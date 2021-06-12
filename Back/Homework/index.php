<?php
require_once ('arr.php');

for($i = 0; $i < 4; $i++) {
    echo $array[$i];
    echo '<br>';
}
foreach ($array as &$key){
    echo $key;
    echo '<br>';
}