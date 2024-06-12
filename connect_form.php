<!--<form action="connect_database.php" method="post">-->
<!--    <label for="servername">Server Name:</label>-->
<!--    <input type="text" id="servername" name="servername" required><br>-->
<!--    <label for="username">Username:</label>-->
<!--    <input type="text" id="username" name="username" required><br>-->
<!--    <label for="password">Password:</label>-->
<!--    <input type="password" id="password" name="password"><br>-->
<!--    <label for="dbname">Database Name:</label>-->
<!--    <input type="text" id="dbname" name="dbname" required><br>-->
<!--    <input type="submit" value="Connect">-->
<!--</form>-->

<form action="connect_database.php" method="post">
    <label for="servername">Server Name:</label>
    <input type="text" id="servername" name="servername" required><br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>

    <label for="dbname">Table Name:</label>
    <input type="text" id="dbname" name="dbname" required><br>

    <label for="dbtype">Database Name:</label>
    <select id="dbtype" name="dbtype" required>
        <option value="MySQL">MySQL</option>
        <option value="Firebird">Firebird</option>
        <option value="PostgreSQL">PostgreSQL</option>
    </select><br>
    <input type="submit" value="Connect">
</form>