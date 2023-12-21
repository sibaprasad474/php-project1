<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="trip4life";
try{
    $connection=new mysqli($hostname,$username,$password,$dbname);
    if($connection->connect_error){
        header('location:login.php ? status=failed ');
    }
    else{
        header('location:login.php ? status=success ');
    }
}
catch(Exception $e){
    echo $e->getMessage()." at line ".$e->getLine();
}

?>