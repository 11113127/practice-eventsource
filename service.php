<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

    $num = "world";
    echo "data: {\"hello\":\"$num\"}".PHP_EOL;
    echo PHP_EOL;
    ob_flush();
    flush();
    usleep(9600000);//10秒(前端花400毫秒)
?>