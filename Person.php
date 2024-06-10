<?php
// Person.php
require_once 'MySQLDatabase.php';

class Person {
    private $id;
    private $name;
    private $email;
    private $date;

    public function __construct($name = null, $email = null, $date = null, $id = null) {
        $this->name = $name;
        $this->email = $email;
        $this->date = $date;
        $this->id = $id;
    }

    public function selectAll($db) {
        $stmt = $db->prepare("SELECT * FROM testtable");
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }

    public function displayTable($db) {
        $result = $this->selectAll($db);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Date</th></tr>";

            foreach ($result as $row) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["date"] . "</td></tr>";
            }

            echo "</table>";
        } else {
            echo "No results";
        }
    }

    public function save($db) {
        $stmt = $db->prepare("INSERT INTO testtable (name, email, date) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $this->name, $this->email, $this->date);
        $stmt->execute();
        $stmt->close();
    }

    public function update($db) {
        if ($this->id === null) {
            throw new Exception("ID is required for update.");
        }
        $stmt = $db->prepare("UPDATE testtable SET name = ?, email = ?, date = ? WHERE id = ?");
        $stmt->bind_param("sssi", $this->name, $this->email, $this->date, $this->id);
        $stmt->execute();
        $stmt->close();
    }

    public function delete($db) {
        if ($this->id === null) {
            throw new Exception("ID is required for delete.");
        }
        $stmt = $db->prepare("DELETE FROM testtable WHERE id = ?");
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
        $stmt->close();
    }
}
?>
