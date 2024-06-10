<?php
abstract class Database {
    protected $connection;

    abstract protected function connect();
    abstract public function query($sql);
    abstract public function prepare($sql);
}
?>