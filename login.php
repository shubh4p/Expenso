<?php
session_start();
include("config.php");
if(isset($_SESSION['user']))
{
    header("location:home.php") ;   
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$mycontact=$_POST['email'];
$mypassword=$_POST['password'];
$password=$mypassword;
$sql="SELECT u_id FROM users WHERE u_email='$mycontact' AND u_password='$password' ";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$count=mysql_num_rows($result);
if($count==1)
{
echo $_SESSION['user']=$mycontact;
header("location:home.php");    
}
else{echo "<script> alert('your login Name or Password is invalid ')</script>"; }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Expenso</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-blue-gray-50 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
    <!-- Logo / App Name -->
    <div class="text-center mb-6">
      <h1 class="text-3xl font-bold text-green-700">Expenso</h1>
      <p class="text-gray-500">Track your monthly expenses smartly</p>
    </div>

    <!-- Login Form -->
    <form action="" method="POST" class="space-y-5">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" required
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" />
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" />
      </div>
      <button type="submit"
              class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg transition font-semibold">
        Login
      </button>
    </form>

    <!-- Register Link -->
    <p class="text-sm text-center text-gray-600 mt-6">
      Don’t have an account?
      <a href="register.php" class="text-green-600 hover:underline">Register here</a>
    </p>
  </div>

</body>
</html>
