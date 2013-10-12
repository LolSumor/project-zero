<?php
namespace Zero;

class ApplicationDatabase extends \PDO
{
    public function __construct($host, $username, $password, $database)
    {
        try {
            parent::__construct("mysql:dbname=" . $database . ";host" . $host, $username, $password);
            $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            return false;
        }

        return true;
    }
}