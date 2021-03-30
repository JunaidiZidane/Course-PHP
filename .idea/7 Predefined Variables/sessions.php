<?php
    session_start();
    $name = "Alex";
    $_SESSION ['name'] = $name;
    echo $_SESSION['name'];