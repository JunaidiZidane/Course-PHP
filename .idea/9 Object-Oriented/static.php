<?php
    class Singer {
        static $name = "Jone";
        static function toSing(){
            echo self::$name;
        }
    }
    Singer::toSing();
?>