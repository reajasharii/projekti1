<?php 
$servername = "localhost"; 
$db = "infoklientit";
$username = "root";
$password = "";

try{

$conn = new PDO("mysql:host=$username;infokilentit=klienti",$username,$password,$db);

$conn->setAttribute(PDO:ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
die("Lidhja deshtoi: " . mysqli_connect_error());
   echo "Eshte i lidhur me sukses";
}
catch(PDOException $e)
{
    echo "Lidhja deshtoi: " $e->getMessage();
}
    ?>
