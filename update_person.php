<?php
// update_person.php
session_start();
require_once 'MySQLDatabase.php';
require_once 'Person.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    $db = new MySQLDatabase($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

    $person = new Person($name, $email, $date, $id);
    try {
        $person->update($db);
        echo "Person updated successfully!";
        header("Location: connect_database.php");
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
