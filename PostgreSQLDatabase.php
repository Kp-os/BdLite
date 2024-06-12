<?php
require_once 'Database.php';

class PostgresDatabase extends Database
{

    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }

    protected function connect()
    {
        $conn_string = "host=$this->host dbname=$this->database user=$this->username password=$this->password";
        $this->connection = pg_connect($conn_string);

        if (!$this->connection) {
            die("Connection failed: " . pg_last_error());
        }
    }

    public function query($sql)
    {
        return pg_query($this->connection, $sql);
    }

    public function prepare($sql)
    {
        return pg_prepare($this->connection, "", $sql);
    }

    public function __destruct()
    {
        pg_close($this->connection);
    }
}

?>