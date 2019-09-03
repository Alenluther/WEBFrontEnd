<?php
if (isset($_POST["value"])) {
    $handle = fopen('info.txt', 'r');
    $lines = [];
    while (!feof($handle)) {
        $line = fgets($handle);
        array_push($lines, $line);
    };
    switch ($_POST["value"]) {
        case 1:
            echo $lines[1];
            break;
        case 2:
            echo $lines[4];
            break;
        case 3:
            echo $lines[7];
            break;
        case 4:
            echo $lines[2] . "?" . $lines[5] . "?" . $lines[8];
            break;
        default:
            echo 'something went wrong...';
            break;
    }
}
