<?php
echo "Welcome to the stage where we are ready to get connected to the database<br>";
//way to the connect to the mysql
//MySQLi(improve) extension-> OOPs POP
//PDO 

//connecting to the dataBase
$servername = "localhost";
$username = "root";
$password = "";


//Creating a connection
$conn = mysqli_connect($servername , $username , $password);

//die if connectionn is not successfully
if(!$conn){
    die("Sorry we failed to connect :".mysqli_connect_error());
}else{
    echo "<br>Connection is successfully";
}

?>