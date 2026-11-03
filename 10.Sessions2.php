<?php
    session_start();
    //session_destroy();
?>

<html>
    <head>
        <title>Session page Two</title>
    </head>
    <body>
        <?php
        echo $_SESSION['name'];
        ?>
    </body>
</html>