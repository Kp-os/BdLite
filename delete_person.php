<?php
// delete_person.php
session_start();
require_once 'MySQLDatabase.php';
require_once 'Person.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $db = new MySQLDatabase($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

    $person = new Person(null, null, null, $id);
    try {
        $person->delete($db);
        echo "Person deleted successfully!";
        header("Location: connect_database.php");
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
