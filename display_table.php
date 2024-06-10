<div class="table-container">
    <?php
    require_once 'MySQLDatabase.php';
    require_once 'Person.php';

    $db = new MySQLDatabase($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

    $query = new Person(null, null, null, null);

    $query->displayTable($db);
    ?>
</div>