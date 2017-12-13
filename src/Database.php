<?php
namespace Itb;

require_once '../setup/setup_database.php';

class Database
{
    const DB_NAME = 'week7';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost:3306';

    private $connection;
    private $dbLocation = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'data/products.mysql';

    public function getConnection()
    {
        return $this->connection;
    }

    public function __construct()
    {

        try {
            $dsn = 'mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_HOST;
            $this->connection = new \PDO(
                $dsn,
                self::DB_USER,
                self::DB_PASS
            );
        } catch (\Exception $e){
            print '<pre>';
            var_dump($e);
        }


    }



}