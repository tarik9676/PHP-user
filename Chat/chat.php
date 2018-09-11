<?php
session_start();
?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>messages</title>
    </head>

    <body>

        <?php
        if (isset($_SESSION['id'])) {
            echo $_SESSION['id'];
        } else {
        echo "You are not logged in!";
        }
        ?> <br><br><br>

            <form action="chatFunc.php" method="post">

                <input type="text" name="uid" placeholder="Username"> <br><br>
                <input type="text" name="message">
                <button type="submit">send message</button>

            </form>

    </body>

    </html>