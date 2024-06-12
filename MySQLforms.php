<?php require_once "display_table.php"; ?>

<form action="insert_person.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br>
    <input type="submit" value="Submit">
</form>

<form action="update_person.php" method="post">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br>
    <input type="submit" value="Update">
</form>

<form action="delete_person.php" method="post">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required><br>
    <input type="submit" value="Delete">
</form>
