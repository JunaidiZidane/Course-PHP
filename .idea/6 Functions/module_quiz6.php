<?php
    function func($arg) {
        $result = 0;
        for ($i = 0; $i < $arg; $i++){
            $result = $result + $i;
        }
        return $result;
    }
    echo func(5);
?>

//outputnya adalah 10

<?php
    function greet($name){
        return "Welcome ".$name;
    }
    echo greet('Rebort');
?>

<?php
    function myFunction($a, $b){
        echo $a * $b;
    }
?>
