<?php
    class Singer {
        public $name = "Ann";
        public function display (){
            echo $this-> name;
        }
    }
    $s = new Singer();
    $S = display();
?>

<?php
    interface MusicianInterface {
        public function play();
    }
    class Guitarist implements MusicianInterface {
        public function play(){
            echo "La La La";
        }
    }
    $obj = new Guitarist();
    $obj -> play();
?>

<?php
    class A {
        final function Foo(){
            echo "A";
        }
    }
    class B extends A {
        function Foo(){
            echo "B";
        }
    }
?>