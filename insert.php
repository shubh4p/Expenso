<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['phone'];
    $d = $_POST['password'];
    $e = $_POST['age'];
    $f = $_POST['gender'];
    $g = $_POST['city'];
   
    $qry = mysql_query( "INSERT INTO expenso.users  (
        u_name,
         u_email, 
         u_contact,
         u_password,
         u_age,
         u_gender,
         u_city)
         VALUES ( '$a', '$b', '$c', '$d', '$e', '$f','$g')");

    if ($qry==true) {
        header("location:login.php");    
        
    } else {
        echo "Not Inserted: " ;
    }
} else {
    echo "Request method is not POST";
}
?>
