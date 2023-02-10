<?php

class Database
{
    private $connection;
    private $statement;
    public function __construct(array $dbConfig)
    {
        /**
         * Init the Database Objects
         * @param array $config
         * 
         */

        // Build DSN with data from config
        $dsn = "mysql:" . http_build_query($dbConfig['dsn'], "", ";");
        // Init the PDO Object
        $this->connection = new PDO(
            $dsn,
            $dbConfig['user']['name'],
            $dbConfig['user']['password'],
            options: [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }
    public function query(string $query, array $param = []): void
    {
        /**
         * $query method: Use to query the database
         * 
         * @param string $query SQL Query
         * @param array $param List of define SQL variable for the SQL Query
         * @return void
         **/
        // Prepare the query
        $this->statement = $this->connection->prepare($query);
        // Execute the query
        $this->statement->execute($param);
    }
    public function get(): mixed
    {
        /**
         * getAll use retrieve the data that return from the execution of query
         * @return mixed
         **/
        // Get the data once
        return $this->statement->fetch();
    }

    public function getAll(): mixed
    {
        /**
         * getAll use retrieve all the data that return from the execution of query
         * @return mixed
         **/
        // Get the multiple data
        return $this->statement->fetchAll();
    }
}
