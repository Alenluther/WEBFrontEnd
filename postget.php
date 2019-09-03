<?php
if (isset($_GET["email"]) && isset($_GET["password"])) {
    if (!empty($_GET["email"]) && !empty($_GET["password"])) {
        echo 1;
    } else {
        echo 0;
    }
}
if (isset($_POST["email"]) && isset($_POST["password"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_GET["value"])) {
    $handle = fopen('info.txt', 'r');
    $lines = [];
    while (!feof($handle)) {
        $line = fgets($handle);
        array_push($lines, $line);
    };
    switch ($_GET["value"]) {
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
            echo $lines[1] . "?" . $lines[4] . "?" . $lines[7];
            break;
        default:
            echo 'something went wrong...';
            break;
    }
}
