<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login proses</title>
</head>
<body>
    <h1>Submit form dengan method POST</h1>
    <p>Welcome <?php echo $_POST["username"]; ?></p>
    <p>Password: <?php echo $_POST["password"]; ?></p>
    <p>
        <?php
            echo isset($_POST["remember"]) ? "You remembered your info" : "You didn't remember your info";
        ?>
    </p>
    <p><a href="form_login6.html">Log out</a></p>
</body>
</html>