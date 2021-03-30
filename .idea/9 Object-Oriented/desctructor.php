<?php
    class Testme {
        public function __construct()
        {
        }
        public function __destruct()
        {
            // TODO: Implement __destruct() method.
            echo "1";
        }
    }
    $test = new Testme();
    unset($test);
?>


//outputnya adalah 21