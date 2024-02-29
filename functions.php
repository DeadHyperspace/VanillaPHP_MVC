<?php

function dumpAndDie($value):void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}