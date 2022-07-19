<!DOCTYPE html>
<html>

<head>
    <title>Soccer Lounge</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>


        <!-- start of info nav and main nav -->
        <section>
            <nav class="infonav">
                <p><i class="fa fa-envelope" aria-hidden="true"></i>soccerlounge@gmail.com</p>

                <ul class="infonav-links">
                    <li>
                        <a href="https://chat.whatsapp.com/Flteb5H8WaGLZ7QqlqWkn" class="icons"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" class="icons"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" class="icons"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" class="icons twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="login.php" class="login">Login /</a></li>
                    <li><a href="add-new-member.php" class="signup">Sign up</a></li>
                </ul>


            </nav>
        </section>
        <section class="back-img" id="image-background">
            <nav class="main-nav">
        <h1 class="mainav-title">Soccer Lounge</h1>


                <!-- code for navbar button toggle -->
                <div class="cont-btn" id="ham">
                    <button class="hamburger">
                        <i class="fa fa-bars ham" aria-hidden="true"></i>
                    </button>
                </div>
                <!-- end -->

                <!-- for the navigation links -->
                <ul class="mainav-links" id="links-nav">
                    <li><a href="#">Latest Transfer News</a></li>
                    <li><a href="#">Fixtures</a></li>
                    <li><a href="#">Match Reports</a></li>
                    <li><a href="#">League standings</a></li>
                    <li><a href="#">SL Games</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </nav>


        </section>

    </header>

    <main>
        <div class="container">
            <div class="news">
                <a href="#">
                    <h4> Latest Transfer News</h4>
                    <img src="./images/jc-gellidon-HT4y0uWVtn8-unsplash.jpg" alt="">
                </a>
            </div>

            <div class="match-report">
                <a href="#">
                    <h4> Match Reports</h4>
                    <img src="./images/thomas-serer-r-xKieMqL34-unsplash.jpg" alt="">
                </a>
            </div>
        </div>

    </main>
    <script src="script.js"></script>
</body>

</html>