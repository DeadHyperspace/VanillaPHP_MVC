<?php
require 'bd.php';
require 'functions.php';
//require 'router.php';

//connection to the PostgresSQL DB


$db = new Datebase();
$post = $db->query("select * from demo.public.project");
dumpAndDie($post);