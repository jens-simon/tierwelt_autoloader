<?php

function autoload($name)
{
    echo $name."<br>";

    $file = 'classes/' . $name . '.php';
    echo $file."<br>";

    if (file_exists($file)) {
        echo $file." ist vorhanden!<br>";
        require_once $file;
    }
}