<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h3>This is user profile</h3>
        <button type="button"><a href="chat.php">Message</a></button> <br><br>

              <?php
if (isset($_SESSION['id'])) {
    echo $_SESSION['id'];
} else {
echo "You are not logged in!";
}
?>

            <br><br><br>

            <form action="logout.php">
                <button>LOG OUT</button>
            </form>

    </div>

</body>

</html>