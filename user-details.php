<?php
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once "./db-connect.php";

    // Corrected SQL query with VALUES part
    $qry = "INSERT INTO userdetails (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($connection->query($qry)) {
        header('location: login.php?success');
    } else {
        header('location: login.php?error');
    }
}
else if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once "./db-connect.php";

    // Corrected SQL query with VALUES part
    $qry = "SELECT email,password FROM userdetails";

   $conn=$connection->query($qry);
   $res=$conn->fetch_assoc();
   if($email==$res['email'] && $password==$res['password']){
    header('location:navbar.php');
   }
   else{
    header('location:login.php ? status=error');
   }
}
?>
