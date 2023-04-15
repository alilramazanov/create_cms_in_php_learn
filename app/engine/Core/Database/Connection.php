<?php


namespace Engine\Core\Database;

use PDO;

class Connection
{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = [
            'host' => '172.19.0.2',
            'port' => '5432',
            'db_name' => 'test',
            'username' => 'test',
            'password' => 'test'
        ];

        $dsn = 'pgsql:host=' . $config['host'] . ';port=' . $config['port'] . ';dbname=' . $config['db_name'];

        $this->link = new PDO($dsn, $config['username'], $config['password']);

        return $this;
    }

    public function execute(string $sql)
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute();
    }

    public function query(string $sql)
    {
        $exe = $this->execute($sql);

        $result = $exe->fetchAll(PDO::FETCH_ASSOC);

        if ($result === false){
            return [];
        }

        return $result;

    }

}
