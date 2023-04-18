<?php
session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Vresume";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Check if the username and password are valid
  $sql = "SELECT * FROM USER WHERE USER_NAME='$username'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 1) {
    // Log the user in and redirect to the home page
    $row = mysqli_fetch_array($result);
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $row['USER_ID'];
    $_SESSION['age'] = $row['AGE'];
    header("location: index.php");
    exit();
  } else {
    // Show an error message
    $login_error = "Invalid username or password.";
  }
}

// Signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST['email'];
  $age = $_POST['age'];

  // Check if the username is already taken 
  $sql = "SELECT * FROM USER WHERE USER_NAME='$username'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 1) {
    // Show an error message
    $signup_error = "Username already taken.";
  } else {
    // Add the new user to the database
    $sql = "INSERT INTO USER (USER_NAME, AGE, EMAIL, PASSWORD) VALUES ('$username', $age, '$email', '$password')";
    mysqli_query($conn, $sql);
    // Log the user in and redirect to the home page
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $sql = "SELECT * FROM USER WHERE USER_NAME='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['userid'] = $row['USER_ID'];
    header("location: index.php");
    exit();
  }
}
mysqli_close($conn);
?>