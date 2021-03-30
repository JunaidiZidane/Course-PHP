<?php
    class Father {
        final function useMoney(){
            echo "wisely";
        }
    }
    class Son extends Father{
        public function sayHi(){
            echo "Hi!";
        }
    }
?>