<?php
    class Musician {
        public $name;
        public function toPlay(){
            echo "Playing on piano";
        }
    }
    class Singer  extends Musician {
    }
?>