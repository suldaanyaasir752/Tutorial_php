<?php
    session_start();
//Sessions:  Cookie / way isla xiriraan  Labada waxay kediyaan information waxayna u keediyaan si joogdo ah
// Session waxay ugu duwan tahy Cookies
//Session information waxay ku keedisaa dhina  server
// Halka oo ku keediyo Cookies information dhinaca browserka


// Tan waxay naga caawinysaa in aan information u tirno page kale
// A nagoo is ticmaalayna Session 

?>

<html>
    <head>
        <title>Session page One</title>
    </head>
    <body>
        <?php
        $_SESSION["name"] = "yaasir";
        ?>
    </body>
</html>