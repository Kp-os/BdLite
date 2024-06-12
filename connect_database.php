<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        margin: 20px;
        padding: 20px;
        border: 1px solid black;
        width: 200px;
    }

    input[type="text"], input[type="email"], input[type="date"] {
        margin-bottom: 10px;
    }

    .table-container {
        position: absolute;
        top: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<?php
session_start();
require_once 'MySQLDatabase.php';
require_once 'FirebirdDatabase.php';
require_once 'PostgreSQLDatabase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = $_POST['servername'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dbname = $_POST['dbname'];
    $dbtype = $_POST['dbtype'];
    $_SESSION['servername'] = $servername;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['dbname'] = $dbname;
    $_SESSION['dbtype'] = $dbtype;

    try {
        switch ($dbtype) {
            case "MySQL":
                $db = new MySQLDatabase($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

                require_once 'display_table.php';
                require_once 'MySQLforms.php';

                echo "Connected successfully!";
                break;
            case "Firebird":
                $db = new FirebirdDatabase($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);
                break;
            case "PostgreSQL":
                $db = new PostgreSQLDatabase($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);
                break;
        }

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>