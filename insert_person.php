<?php
// insert_person.php
session_start();
require_once 'MySQLDatabase.php';
require_once 'Person.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    $db = new MySQLDatabase($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

    $person = new Person($name, $email, $date);
    $person->save($db);

    echo "Person inserted successfully!";
}
?>