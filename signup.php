<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            text-shadow: 0px 0px 10px black;
        }
        .btn {
            margin-right: 1%;
            text-shadow: 0px 0px 10px black;
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
        .carousel-item {
            max-height: 100vh;
        }
        .carousel-item img{
            object-fit: cover;
        }
        .but {
            background-color: whitesmoke;
            color: #252525;
            padding: 5px 20px;
            border: 0;
            text-decoration: none;
            border-radius: 10px;
        }
        .carousel-caption {
            background: radial-gradient(rgba(25,25,25,0.3) 0%, rgba(25,25,25,0) 40%);
        }
        .carousel-caption p, .carousel-caption h5 {
            text-shadow: 0px 0px 10px black;
        }
        @media only screen and (max-width: 768px) {
            .carousel-item {
                margin-top: 70px;
            }
            .holder {
                flex-direction: column;
                margin-top: 100px;
            }
        }
        .cont {
            display: flex;
            width: 300px;
            justify-content: space-around;
        }
        .bar {
            padding: 0;
        }
        .holder {
            display: flex;
            justify-content: center;
            color: #ffffff;
            padding: 10%;
            gap: 1%;
            
        }
        .container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 450px;
        }
        .container > h1 {
            text-align: center;
        }
        .input-groups {
            display: flex;
            justify-content: space-between;
        }
        input:not([type=submit]){
            border-radius: 30px;
            padding: 5px 10px 7px;
        }
        input:focus{
            outline: none;
        }
        input[type=submit]{
            margin: 0 0 0 auto;
            width: 100px;
            color: #ffffff;
            background-color: green;
            border-radius: 30px;
            border: 0;
            padding: 5px 20px 7px;
        }
    </style>
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar fixed-top">
        <a class="nav-home" href="./index.php">VResume</a>
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></button>
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
    <div class="holder">
        <div class="signup">
            <form class="modal-content animate" action="login.php" method="post">
                <div class="container">
                    <h1>LOGIN</h1>
                    <div class="input-groups">
                        <label for="username">Username </label>
                        <input type="text" placeholder="Enter Username" name="username" required>
                    </div>
                    <div class="input-groups">
                        <label for="password">Password </label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                    </div>
                    <input type="submit" id="log" name="login" value="Login">
                </div>
            </form>
        </div>
        <div class="signup">
            <form class="modal-content animate" action="login.php" method="post">
                <div class="container">
                    <h1>SIGNUP</h1>
                    <div class="input-groups">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Provide a Username" required>
                    </div>
                    <div class="input-groups">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Provide a password" required>
                    </div>
                    <div class="input-groups">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Provide your email" required>
                    </div>
                    <div class="input-groups">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" placeholder="Provide your age" required>
                    </div>
                        <input type="submit" name="signup" value="Signup">
                </div>
            </form>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>