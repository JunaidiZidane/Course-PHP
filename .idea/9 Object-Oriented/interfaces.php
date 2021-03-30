<?php
    interface Imusician {
        public function play();
    }
    class Guitarist implements Imusician {
        public function play(){
            echo "playin a guitar";
        }
    }
?>