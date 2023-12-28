<?php
if(isset($_POST['logout'])){
    header('location:login.php ? status=loggedout ');
}
?>