<?php
    $handle = fopen('num.txt', "w");
    fwrite($handle, '1');
    fwrite($handle, '2');
    fclose($handle);