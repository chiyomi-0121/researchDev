<?php 
    $filename = "./text/start.txt";

    try {
        $fp = fopen($filename, 'r');
        $text = fgets($fp);

        echo $text;
    } catch(Exception $e) {
        var_dump($e->getMessage());
    } 
?>