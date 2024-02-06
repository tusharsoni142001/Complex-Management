<?php
    session_start();    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sport Spot</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="assets/website_logo.png" type="image/x-icon" />

    <link rel='stylesheet' href='https://npmcdn.com/flickity@1.2/dist/flickity.min.css'>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>

    <style type="text/css">
    .no-fouc {
        display: none;

    }
    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <!-- Typed JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>



    <!-- CSS Files -->
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/header.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/footer.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/cards.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/testimonial.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/acc_dropdown.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/scroll_to_top.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/flip_card.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/aos.css">

    <!-- Fevicon -->
    <link rel="shortcut icon" href="img/website_logo.webp" type="image/x-icon" />

    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Google Fonts -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');

    /* Cards font */

    @import url('https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap');
    </style>


</head>

<body>

    <!-- Header -->


    <header>
        <img src="assets/website_logo.png" alt="website logo">

        <a href="index.php" class="logo"><span style="font-family: 'Cabin', sans-serif;">Sports</span><span
                style="font-family: 'Courgette', cursive;">Spot</span></a>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="complex.php">Book Sports Complex</a>
            </li>
            <!-- <li>
                <a href="latest_news.php">Latest News</a></li>-->
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>


        <?php  
            /*session_start();*/
            if(isset($_SESSION['userName'])){
                echo ' &ensp; &ensp;


                <!-- Account details-->


                <div class="action">
                    <div class="profile" onclick="menuToggle();">
                        <img src="https://avatars.dicebear.com/api/initials/'.$_SESSION["userName"].'.svg">
                    </div>
                    <div class="menu">
                    <h3>'. $_SESSION["userName"] . '</h3>
                        <ul style="display: block;">
                            <li><img src="assets/dashboard/user-2.png"><a href="user/dashboard.php">Dashboard</a></li>
                            <li><img src="assets/dashboard/logout.png"><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                ';
            }else{
                echo "<button class='login' onclick='window.location.href=\"request.php\"'><span>APPLY</span></button>";
                echo "<button class='login' onclick='window.location.href=\"login.php\"'><span>LOGIN</span></button>";
                
            }    
        
        ?>


        <script>
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
        </script>


    </header>

    <!-- Sticky Header JS -->

    <script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
    </script>


    <!-- Section - I -->


    <div class="section1">
        <div class="tag_line">
            <h1 style="
    font-size: 3em;
    margin: .67em 0;
    font-weight: bolder;
">
                '' Unlock the World of Sports:<br> Sportsspot - Discover, Play, and Excel at Top-notch Sports
                Complexes...''
            </h1>
        </div>
    </div>


    <!-- Section - II -->


    <section class="section3" id="section3">
        <div class="container">
            <div class="serviceBox">
                <div class="icon" style="--i:#4eb7ff">
                    <i class="material-icons">
                        newspaper
                    </i>
                </div>
                <div class="content">
                    <h2 style="font-family:'PT Sans Narrow', sans-serif;letter-spacing: 2px;">Article</h2>
                    <p style=" font-size: 17px;">Sportsspot, the innovative sports platform, is taking the sports
                        community by storm. With its comprehensive database of sports complexes, users can effortlessly
                        access detailed information, map previews, and easy booking options, making it a go-to resource
                        for sports enthusiasts. Discover new venues, plan sports events, and enjoy hassle-free sports
                        activities with Sportsspot!</p>
                </div>
            </div>
            <div class="serviceBox">
                <div class="icon" style="--i:#fd6469">
                    <ion-icon name="golf-outline"></ion-icon>
                </div>
                <div class="content">
                    <h2 style="font-family:'PT Sans Narrow', sans-serif;letter-spacing: 2px;">Our Goal</h2>
                    <p style="font-size: 18px;">The goal of Sportsspot is to be the ultimate sports complex information
                        platform, providing users with easy access to detailed information, map previews, and simple
                        booking options for various sports venues, simplifying the process of finding and enjoying
                        sports activities.</p>
                </div>
            </div>

            <div class="serviceBox">
                <div class="icon" style="--i:#ffb508">
                    <i class="material-icons">manage_accounts
                    </i>
                </div>
                <div class="content">
                    <h2 style="font-family:'PT Sans Narrow', sans-serif;letter-spacing: 2px;">Process</h2>
                    <p style="font-size: 17.5px;">Sportsspot streamlines sports complex discovery and booking. Users can
                        search for venues by location, sport type, and facilities. The platform offers detailed info,
                        map previews, and easy booking options. With its user-friendly interface, it's the go-to tool
                        for sports enthusiasts, coaches, and event organizers, making sports activities more accessible
                        and enjoyable.</p>
                </div>
            </div>

        </div>

        <!-- Section II Icon -->

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    </section>



    <!-- SECTION - III (Customer reviews)-->
    <section class="section4" id="section4">

        <h1>CUSTOMER REVIEW</h1>

        <div class="slide-container swiper" style="padding: 40px 40px;">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <!-- 1 -->
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/profile3.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Repellendus, consectetur.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/profile4.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Repellendus, consectetur.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/profile5.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Repellendus, consectetur.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>

                    <!-- 4-->
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/profile4.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Repellendus, consectetur.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>


    </section>




    <!-- Section - IV -->
    <section class="section2" id="section2">
        <div class="container1">
            <div class="text">
                Book Your Complex
            </div>

            <form method="POST" action="complex.php">

                <button type="submit" class="checkme" id="booknow" name="news_check" style=" height: 11rem; width: 42rem; text-decoration:none;
">
                    <h1>Book now</h1>
                </button>
            </form>
        </div>
    </section>



    <!-- Footer -->


    <footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
            <li>
                <a href="https://www.facebook.com">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>
            <li>
                <a href="https://twitter.com">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
        </ul>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <p>SportsSpot &copy; 2023 | @All Rights Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- Scroll To Top-->


    <div class="scrollTop" onclick="scrollToTop();">

    </div>

    <script>
    window.addEventListener('scroll', function() {
        var scroll = document.querySelector('.scrollTop');
        scroll.classList.toggle("active", window.scrollY > 500)
    })

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        })
    }
    </script>


    <!-- AOS js Library -->

    <script src="js/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/testimonial.js"></script>

</body>



</html>