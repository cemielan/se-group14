<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} 

include('database.php');


if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    include 'header_logged_in.php';
} else {
    include 'header_logged_out.php';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEEFLIX</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="home.css">
    <script src="home.js" defer></script>
</head>

<body>

    <section class="greet">
        <h1 id="greeting"></h1>
        <div class="flex-container">
            <h3>Looking for movies?</h3>
            <div class="flex-container">
                <input type="text" name="" id="find" placeholder="Find movies!">
                <input type="button" id="search" value="Search">
            </div>
        </div>
    </section>
    
    <section class="slider">
        <div class="slides-container">
            <div class="slides">
                <!-- radio buttons -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
    
                <!-- Slides -->
                <div class="slide first">
                    <h2>Most Popular</h2>
                    <img src="./Assets/Banner_AntMan.jpeg" alt="">
                </div>
                <div class="slide">
                    <h2>Best Film of 2023</h2>
                    <img src="./Assets/Banner_Avatar.jpg" alt="">
                </div>
                <div class="slide">
                    <h2>Box Office</h2>
                    <img src="./Assets/Banner_Godzilla.jpg" alt="">
                </div>
                <div class="slide">
                    <h2>Highest Rating</h2>
                    <img src="./Assets/Banner_Oppenheimer.jpg" alt="">
                </div>
    
                <!-- Automatic -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
    </section>

    <h2 id="now-showing">Now Showing</h2>
    <section class="current-show">
        <div class="wraper" data-animated="">
            <div class="flex-container">
                <a href="movie.php?movie_id=1">
                    <div class="movie 1">
                        <img src="./Assets/AntMan-Quantumania.jpg" alt="Ant-Man and the Wasp: Quantumania">
                        <p>Ant-Man and the Wasp: Quantumania</p>
                    </div>
                </a>
                <a href="movie.php?movie_id=2">
                    <div class="movie 2">
                        <img src="./Assets/CaptainMarvel.jpg" alt="Captain Marvel">
                        <p>Captain Marvel</p>
                    </div>
                </a>
                <a href="movie.php?movie_id=3">
                    <div class="movie 3">
                        <img src="./Assets/FastX.jpg" alt="Fast X">
                        <p>Fast X</p>
                    </div>
                </a>
                <a href="movie.php?movie_id=6">
                    <div class="movie 4">
                        <img src="./Assets/MissionImpossible.jpg" alt="Mission: Impossible - Dead Reckoning Part One">
                        <p>Mission: Impossible - Dead Reckoning Part One</p>
                    </div>
                </a>
                <a href="movie.php?movie_id=4">
                    <div class="movie 5">
                        <img src="./Assets/Oppenheimer.jpg" alt="Oppenheimer">
                        <p>Oppenheimer</p>
                    </div>
                </a>
                <a href="movie.php?movie_id=5">
                    <div class="movie 6">
                        <img src="./Assets/Transformers.jpg" alt="Transformers: Rise of the Beasts">
                        <p>Transformers: Rise of the Beasts</p>
                    </div>
                </a>
                <a href="movie.php?movie_id=7">
                    <div class="movie 7">
                        <img src="./Assets/JohnWick4.jpg" alt="John Wick: Chapter 4">
                        <p>John Wick: Chapter 4</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">BEEFLIX</div>
            <div class="footer-social">
                <a href="https://www.facebook.com/?locale=id_ID"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/home?lang=id"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2023 BEEFLIX. All Rights Reserved.
        </div>
    </footer>
    <!-- End of Footer -->

</body>
</html>
