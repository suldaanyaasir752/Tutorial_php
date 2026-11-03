
<!--
GET

Name/Value pair
Not Secure Don't send password
Limit = 1024 character
can not be used to send binary data (image/document)
php provides $_GET

-----------------------------------------------------

POST 

Send data through HTTPS header
No Limit
You can send  ASCII and Binary Data
Secure if the website has https
php provides $_POST

------------------------------------------------------

REQUEST (soo jiidasho)

Labadaba way la shaqeysaa 
$_GET  iyo $_POST

-->
<?php

if($_GET['name'] || $_GET['age']){
   echo"Welcome ".$_GET['name']. " your age is " .$_GET['age'];
    exit();
}

if($_POST['name'] || $_POST['age']){
  echo $_POST ['name'];
   echo $_POST ['age'];

}


if($_REQUEST['name'] || $_POST['age']){
    echo $_REQUEST ['name'];
    echo $_REQUEST ['age'];

}

?>

<form method= "POST" action="<?php $_PHP_SELF ?>">
Name: <input type="text"name="name"/>
<pre>
Age: <input type="text"name="age"/>
</pre>
<input type="submit">
</form>