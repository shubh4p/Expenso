<?php
session_start();
include("config.php"); // Make sure it has mysql_connect and mysql_select_db

if (!isset($_SESSION['user'])) {
    header("location:login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_SESSION['user'];

    // Get the user ID from the email
    $user_query = mysql_query("SELECT u_id FROM users WHERE u_email = '$email'");
    if (!$user_query || mysql_num_rows($user_query) == 0) {
        die("User not found.");
    }
    $user = mysql_fetch_assoc($user_query);
    $user_id = $user['u_id'];

    // Get form data
    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $payment = $_POST['payment'];
    $note = $_POST['note'];
    $flag = 1;

    // Insert expense
    $insert = mysql_query("INSERT INTO expenses (user_id, title, category, amount, expense_date, note, flag)
                           VALUES ('$user_id', '$title', '$category', '$amount', '$date',  '$note', '$flag')");

    if ($insert) {
        header("Location: home.php");
        exit();
    } else {
        echo "Not Inserted: " . mysql_error();
    }
} else {
    echo "Invalid request.";
}
?>
