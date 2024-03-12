<?php
class Datebase{
    public $connection;
    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'demo';
        $user = 'devwannabe';
        $password = 'root';
        //$dsn = "pgsql:host=$host;dbname=$dbname", $user, $password;
        $this->connection = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);

    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}