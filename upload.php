<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Resume Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/18718c7391.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- bootstrap styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        :root {
            --bg: black;
            --white: whitesmoke;
            font-weight: bold;
        }
        ::-webkit-scrollbar {
            display: none;
        }
        .navbar {
            background: linear-gradient(90deg, rgba(25,25,25,0.8) 0%, rgba(25,25,25,0) 30%, rgba(25,25,25,0) 70%, rgba(25,25,25,0.8) 100%);
        }
        html, body {
            background-color: var(--bg);
            font-weight: bold;
            scrollbar-width: none;
        }
        .nav-home {
            text-decoration: none;
            font-size: x-large;
            color: var(--white);
            padding-left: 3%;
        }
        .btn {
            margin-right: 1%;
        }
        .btn, .btn:hover{
            color: var(--white);
            font-weight: bold;
            font-size: x-large;
        }
        .btn:focus, .btn::after, .btn::before {
            border: 0;
        }
        .offcanvas-body {
            margin: 0;
            padding: 0;
            background-color: var(--bg);
        }
        .nav-list {
            list-style-type: none;
            padding: 0 10px;
            font-weight: bolder;
        }
        .nav-list li {
            margin: 30px 10px;
        }
        .nav-list li a {
            text-decoration: none;
            color: var(--white);
            font-size: xx-large;
        }
        .offcanvas-title {
            font-weight: bolder;
            padding-left: 5px;
            margin: 0;
        }
        .but {
            background-color: whitesmoke;
            color: #252525;
            padding: 5px 20px;
            border: 0;
            text-decoration: none;
            border-radius: 10px;
        }
        #sub, #log, .cancelbtn {
            margin: 0 0 0 auto;
            width: 100px;
            padding: 5px 10px;
            border: 0;
            border-radius: 30px;
            background-color: green;
            color: #f1f1f1;
        }
        .cancelbtn {
            background-color: red;
        }
        #sub:focus, #log:focus, .cancelbtn {
            outline: none;
        }
        .upl-container, .modal {
            padding-left: 10%;
            padding-right: 10%;
        }
        .container {
          padding: 16px;
          display: flex;
            flex-direction: column;
            gap: 30px;
            background-color: #000;
            border-radius: 30px;
        }

        span.psw {
          float: right;
          padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; 
          background-color: rgba(0,0,0,0.6); 
          padding-top: 60px;
        }
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        .input-groups {
            display: flex;
            flex-direction: column;
        }
        .input-groups input::placeholder {
            color: #fff;
        }
        .input-groups input {
            background-color: #888;
            width: 250px;
            color: #fff;
            border-radius: 30px;
            padding: 5px 10px;
            margin-left: 1%;
        }
        input:focus {
            outline: none;
        }
        /* Modal Content/Box */
        .modal-content {
          background-color: #000;
          color: #f1f1f1;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 50%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }

        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 800px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
          .modal-content {
            width: 80%;
          }
          #log {
            width: 100%;
          }
          .input-groups input {
            width: 175px;
          }
        }
        .cont {
            display: flex;
            width: 400px;
            align-items: center;
            justify-content: space-around;
        }
        .bar {
            padding: 0;
        }
        .usr, .logout, .login {
            font-size: large;
        }
    </style>
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar fixed-top">
        <a class="nav-home" href="./index.php">VResume</a>
        <div class="cont">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
            <a class="nav-home usr" href="#"><i class="fa-solid fa-user" style="color: #ffffff;"></i>&ensp;<?php echo $_SESSION['username']; ?></a>
            <a class="nav-home logout" href="./logout.php">Logout&ensp;<i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>
            <?php else : ?>
            <a class="nav-home login" href="./signup.php">Login/SignUp</a>
            <?php endif; ?>
            <button class="btn bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></button>
        </div>
        <div class="offcanvas offcanvas-start text-bg-dark" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">VResume</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body bg-black">
                <ul class="nav-list">
                    <li><a href="./index.php"><i class="fa-solid fa-house fa-sm" style="color: #ffffff;"></i>&ensp;Home</a></li>
                    <li><a href="list.php"><i class="fa-solid fa-list fa-sm" style="color: #ffffff;"></i>&ensp;List</a></li>
                    <li><a href="upload.php"><i class="fa-solid fa-upload fa-sm" style="color: #ffffff;"></i>&ensp;Upload</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- uploader start -->
    <section class="upl-container">
        <h1 class="u" style="text-align: center;color: whitesmoke;font-weight: bolder;">Upload Data</h1>
        <div class="uplder">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="user">
                    <label for="username" class="ul">Name: <span>*</span></label>
                    <input type="text" id="username" placeholder="Enter your name..." name="username" required>
                </div>
                <div class="bio">
                    <label for="address" class="bl">Address: </label>
                    <textarea name="address" id="address" cols="20" rows="5" placeholder="Provide your address..." ></textarea>
                </div>
                <div class="bio">
                    <label for="bio" class="bl">About yourself: <span>*</span></label>
                    <textarea name="bio" id="bio" cols="20" rows="15" placeholder="Describe yourself..." required></textarea>
                </div>
                <div class="user">
                    <label for="contact">Mobile number: </label>
                    <input type="number" name="contact" id="contact" placeholder="Enter your mobile number.." >
                </div>
                <div class="bio">
                    <label for="qualifications" class="bl">Your Qualifications: <span>*</span></label>
                    <textarea name="qualifications" id="qualifications" cols="10" rows="15" placeholder="Provide your Qualifications..." required></textarea>
                </div>
                <div class="bio">
                    <label for="internships" class="bl">Your Internships: </label>
                    <textarea name="internships" id="internships" cols="20" rows="15" placeholder="Provide your Internships..." ></textarea>
                </div>
                <div class="upload img">
                    <label for="img" class="fl">Upload your profile photo: </label>
                    <input type="file" name="profile-photo" id="img" required>
                </div>
                <div class="upload">
                    <label for="file" class="fl">Upload your VIDEO RESUME file: <span>*</span></label>
                    <input type="file" name="video-resume" id="file" required>
                </div>
                <div class="addfiles">
                    <label for="res">Upload additional files(Resume, etc..):</label>
                    <input type="file" name="res" id="res">
                </div>
                <div class="bio">
                    <label for="links" class="bl">Profile links: </label>
                    <textarea name="links" id="links" cols="20" rows="3" placeholder="Provide your links..." ></textarea>
                </div>
                <div class="sub">
                    <input type="submit" id="sub" name="sub" value="Submit" placeholder="Submit" required>
                </div>
            </form>
        </div>
    </section>
    <!-- uploader end -->
    <!-- footer start -->
    <footer class="ftr">
        <div class="ftr-contain">
            <div class="ftr-title">
                <h1>VResume</h1>
            </div>
            <div class="ftr-about">
                <h4>Learn more about us here.</h4>
            </div>
        </div>
        <div class="ftr-content">
            <div class="ftr-links">
                <a class="git" target="_blank" href="http://www.github.com/bharathlakkoju/wt">
                    <i class="fa-brands fa-github fa-lg" style="color: #ffffff;"></i>&ensp;
                    Github
                </a>
                <a class="linkin" target="_blank" href="https://www.linkedin.com/in/bharath-lakkoju-b832a921b/">
                    <i class="fa-brands fa-linkedin fa-lg" style="color: #ffffff;"></i>&ensp;
                    LinkedIn
                </a>
            </div>
            <div class="ftr-nav">
                <a class="ftr-nav-home" href="#"><i class="fa-solid fa-house fa-sm" style="color: #ffffff;"></i>&ensp;Home</a>
                <a class="ftr-nav-list" href="list.php"><i class="fa-solid fa-list fa-sm" style="color: #ffffff;"></i>&ensp;List</a>
                <a class="ftr-nav-upload" href="upload.php"><i class="fa-solid fa-upload fa-sm" style="color: #ffffff;"></i>&ensp;Upload</a>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        ScrollReveal().reveal('.u', {
            delay: 200,
            reset: true,
        })
        ScrollReveal().reveal('.user', {
            delay: 200,
            reset: true,
        })
        ScrollReveal().reveal('.bio', {
            delay: 300,
            reset: true,
        })
        ScrollReveal().reveal('.upload', {
            delay: 200,
            reset: true,
        })
        ScrollReveal().reveal('.addfiles', {
            delay: 200,
            reset: true,
        })
        ScrollReveal().reveal('.sub', {
            delay: 200,
            reset: true,
        })
        ScrollReveal().reveal('.ftr', {
            delay: 200,
            reset: true,
        })
    </script>
</body>
</html>
<?php 
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
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sub'])) {
        $user_id = $_SESSION['userid'];
        $username = $_POST['username'];
        $age = $_SESSION['age'];
        $address = $_POST['address'];
        $bio = $_POST['bio'];
        $number = $_POST['contact'];
        $qual = $_POST['qualifications'];
        $interns = $_POST['internships'];
        $links = $_POST['links'];

        $target_dir = "images/";
        $filename = basename($_FILES["profile-photo"]["name"]);
        $profile_target_file = $target_dir . $filename;
        
        $target_dir = "videos/";
        $filename = basename($_FILES["video-resume"]["name"]);
        $video_target_file = $target_dir . $filename;
        
        $target_dir = "files/";
        $files_target_file = basename($_FILES["res"]["name"]);

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
            $sql = "SELECT * FROM DETAILS WHERE USER_ID = $user_id";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 1) {
                move_uploaded_file($_FILES["video-resume"]["tmp_name"], $video_target_file);
                move_uploaded_file($_FILES["profile-photo"]["tmp_name"], $profile_target_file);
                move_uploaded_file($_FILES["res"]["tmp_name"], $files_target_file);
                $sql = "UPDATE DETAILS SET PROFILE_NAME='$username', PROFILE_PHOTO='$profile_target_file', AGE=$age, ADDRESS='$address', CONTACT=$number, QUALIFICATIONS='$qual', INTERNSHIPS='$interns', DESCRIPTION='$bio', VIDEO='$video_target_file', RESUME='$files_target_file', LINKS='$links' WHERE USER_ID=$user_id";
                $result = mysqli_query($conn, $sql);
                if ($result == 1) {
                    header("Location:signup.php");
                    exit();
                }
            } else {
                move_uploaded_file($_FILES["video-resume"]["tmp_name"], $video_target_file);
                move_uploaded_file($_FILES["profile-photo"]["tmp_name"], $profile_target_file);
                move_uploaded_file($_FILES["res"]["tmp_name"], $files_target_file);
                $sql = "INSERT INTO uploads (USER_ID, PROFILE_NAME, PROFILE_PHOTO, AGE, ADDRESS, CONTACT, QUALIFICATIONS, INTERNSHIPS, DESCRIPTION, VIDEO, RESUME, LINKS) VALUES ($user_id, $username, '$profile_target_file', $age, '$address', $number, '$qual', '$interns', '$bio', '$video_target_file', '$files_target_file', '$links')";
                $result = mysqli_query($conn, $sql);
                if ($result == 1) {
                    header("Location:index.php");
                    exit();
                }
            }
        } 
    } else {
        header("Location:signup.php");
        exit();
    }
?>