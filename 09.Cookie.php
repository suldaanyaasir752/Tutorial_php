<?php


setcookie("name", "yaasir", time() + 60);
$name = "yaasir";
setcookie($name, "yaasir", time() + 60)

//if(isset($_POST['submit'])) {
  //  setcookie("username", $_POST['username'], time() + 60);
//}

?>

<html>
<head>
    
    <title>Cookie</title>
</head>
<body>
   <form action="user.php" method="POST">
    <input type="text" name="username">
    <input type="submit" name="submit">
</form>
    
</body>
</html>