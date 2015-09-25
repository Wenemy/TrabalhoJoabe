<?php
class Connection extends \PDO
{
    public function __construct()
    {
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'trabalho';
        $this->user = 'root';
        $this->pass = '3156350';
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct($dns, $this->user, $this->pass );
    }
}