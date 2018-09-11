<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">

    </style>
</head>

<body>

    <div class="container">

        <a href="loginPage.php"><button>LOG IN</button></a>

        <br><br><br>

        <a href="signupPage.php"><button>SIGN UP</button></a>

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