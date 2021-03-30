<?php
    $h = fopen('my.txt', 'a');
    fwrite($h, 'test');
    fclose($h);