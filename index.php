<?php

require 'functions.php';
require 'router.php';

//connection to the PostgresSQL DB
$dsn = "pgsql:host=localhost;port=5432;dbname=demo;user=devwannabe;password=root";
new PDO($dsn);