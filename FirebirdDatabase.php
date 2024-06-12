<?php
require_once 'Database.php';

class FirebirdDatabase extends Database
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
        $db_path = $this->host . ':' . $this->database;
        $this->connection = ibase_connect($db_path, $this->username, $this->password);

        if (!$this->connection) {
            die("Connection failed: " . ibase_errmsg());
        }
    }

    public function query($sql)
    {
        return ibase_query($this->connection, $sql);
    }

    public function prepare($sql)
    {
        return ibase_prepare($this->connection, $sql);
    }

    public function __destruct()
    {
        ibase_close($this->connection);
    }
}

?>