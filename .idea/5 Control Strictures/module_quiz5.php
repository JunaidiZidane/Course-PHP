<?php
    for ($i = 0; $i <= 10; $i++){
        if ($i%2 != 0){
            continue;
        }
        echo $i."<br/>";
    }
?>

<?php
    $x = 0;
    while ($x <= 7){
        $x++;
    }
    echo $x;
?>

//outputnya adalah 8

<?php
    $x = 6;
    if ($x == 10){
        echo "A";
    } elseif ($x > 7 && $x < 10){
        echo "B";
    } else {
        echo "D";
    }
?>

//outputnya adalah Daq