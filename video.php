<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
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
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submmit'])) {
        $user_id = $_SESSION['userid'];
        $username = $_POST['username'];
        $address = $_POST['address'];
        $bio = $_POST['bio'];
        $number = $_POST['contact'];
        $qual = $_POST['qualifications'];
        $interns = $_POST['internships'];
        $dp = $_POST['profile-photo'];

        $target_dir = "images/";
        $filename = basename($_FILES["fileToUpload"]["name"]);
        $target_file = $target_dir . $filename;

        $target_dir = "videos/";
        $filename = basename($_FILES["video-resume"]["name"]);
        $target_file = $target_dir . $filename;
    }
} else {
    header("Location:signup.php");
    exit();
}
?>