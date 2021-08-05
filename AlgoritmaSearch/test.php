<?php
    $data = [5,7,8,3];

    $i = 0;
    $s = 0;
     
    while ($i < sizeof($data)) {
        $s = $s + $data[$i];
        $i = $i + 1;
    }
    echo $s;
?>