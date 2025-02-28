<!DOCTYPE html>
<html lang="en">
    <head>
    <title>My First PHP</title>
    <link rel="stylesheet" text="text/css" href="style.css">


</head>
<body>
    <form action="login.php" method="post">
        <h2>Baby Blue</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>ID</label>
        <input type="number" name="id" placeholder="ID"><br>

        <label>Name</label>
        <input type="text" name="name" placeholder="Name"><br>

        <label>Address</label>
        <input type="text" name="address" placeholder="Address"><br>

        <label>Contact Number</label>
        <input type="number" name="number" placeholder="Contact Number"><br>

        <label>Date</label>
        <input type="date" name="date" placeholder="Date"><br>

        <button type="submit">login</button>
    </form>
</body>
</html>