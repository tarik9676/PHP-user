<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>log in</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Log in Page</h2>

    <form action="login.php" method="post">
        <input type="text" name="uid" placeholder="Username"><br><br>
        <input type="text" name="pwd" placeholder="Password"><br><br>
        <button type="submit">LOG IN</button>
    </form>

<?php
if (isset($_SESSION['id'])) {
    echo $_SESSION['id'];
} else {
echo "You are not logged in!";
}
?>

</body>

</html>