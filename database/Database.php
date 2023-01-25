<?php
class Database
{
    /*
    * Class Database:
    * @param array $config
    * @param string $user
    * @param string $pass
    * Method: 
    *   $this->query(string $query, array $param=[] )
    *
    */
    private $connection;
    public function __construct(array $config, string $user, string $pass)
    {
        $dsn = "mysql:" . http_build_query($config, "", ";");
        $this->connection = new PDO($dsn, $user, $pass, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    function query(string $query, array $param = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($param);
        return $statement;
    }
}

// Establish database connection:
$myDatabase = new Database($configure["databaseInfo"], "admin", "Iseeyou1234");
