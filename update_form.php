<!-- update_form.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Person</title>
</head>
<body>
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
</body>
</html>
