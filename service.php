<?php
    header("Content-Type: text/event-stream");
    header("Cache-Control: no-cache");

    echo "data: {\"HTML\": \"Hypertext Markup Language\"}\n\n";

    echo "event: CSS\n";
    echo "data: {\"CSS\": \"Cascading Style Sheets\"}\n\n";

    echo "event: JS\n";
    echo "data: {\"JS\": \"JavaScript\"}\n\n";

    echo "event: Format\n";
    echo "data: {\"XML\": \"Extensible Markup Language\" , \"JSON\": \"JavaScript Object Notation\"}\n\n";

    echo PHP_EOL;
    ob_flush();
    flush();
    usleep(9600000);//10秒(前端花0.4秒)
?>