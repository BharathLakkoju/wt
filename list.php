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
        <a class="nav-home" href="index.php">VResume</a>
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
                    <li><a href="index.php"><i class="fa-solid fa-house fa-sm" style="color: #ffffff;"></i>&ensp;Home</a></li>
                    <li><a href="list.php"><i class="fa-solid fa-list fa-sm" style="color: #ffffff;"></i>&ensp;List</a></li>
                    <li><a href="upload.php"><i class="fa-solid fa-upload fa-sm" style="color: #ffffff;"></i>&ensp;Upload</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- list start -->
    <div class="l" style="margin-top: 70px;">
        <h1 style="text-align: center;color: whitesmoke;">LIST</h1>
    </div>
    <section class="list">
        <div class="grids">
            <div class="grid-card">
                <img class="item-img" src="./images/img2.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img3.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img4.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img5.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img6.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img7.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img8.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img9.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img10.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img11.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img12.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
            <div class="grid-card">
                <img class="item-img" src="./images/img13.jpg" alt="">
                <div class="grid-desc">
                    <h5 class="name">NAME</h5><div></div>
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores rerum rem explicabo odio? Explicabo reprehenderit, voluptatum mollitia inventore, quos nesciunt et sed velit suscipit aperiam consectetur, necessitatibus nobis eos!</p>
                    <a class="but" href=""><i class="fa-regular fa-eye fa-xs"></i>&ensp;View</a>
                </div>
            </div>
        </div>
    </section>
    <!-- list end -->
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
        <div class="ftr-content-links">
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
        </div>
        <div class="ftr-content-nav">
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
        ScrollReveal().reveal('.l', {
            delay: 200,
            reset: true,
        })
        ScrollReveal().reveal('.list', {
            delay: 300,
            reset: true,
        })
        ScrollReveal().reveal('.grid-card', {
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