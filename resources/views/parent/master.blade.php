<!DOCTYPE html>
<html>

<head>
    <title>Neon Group</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--/*font awesome icons*/-->
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    <!--rubik font family -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&family=Rubik:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!--custom css-->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!--media css-->
    <link type="text/css" rel="stylesheet" href="css/media.css" />

    <!--jquery ui files-->
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css" />
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css" />

    <!--owl carousel-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />


</head>

<body>

    <div id="arrow">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>

    <header id="home">
        <div class="container">
            <div class="top-bar">
                <div class="nav-col">
                    <div class="logo">
                        <h1><span style="font-size: 50px ;"><i>N</i></span>eon </h1>
                    </div>
                    <!--logo-->
                    <div class="menu">
                        <a class="active" href="#home">Home</a>
                        <a href="#why-choose-us">About US</a>
                        <a href="#expand">Services</a>
                        <a href="#project">Project</a>
                        <a href="#blog">Blog</a>
                        <a href="#contact">Contact Us</a>
                    </div>
                    <div class="clear"></div>
                    <!--clear-->
                </div>
                <!--nav-col-->
                <div class="cnt-info-col">
                    <a href="tel:7652000000"><span>Call US:</span>7652000000</a>
                </div>
                <div class="clear"></div>
                <!--clear-->
            </div>
            <!--top-bar-->
        </div>
    </header>

    <section id="mobile-menu" >
        <div class="container-mobile">
            <div class="mobile-logo">
            <h1><span style="font-size: 30px ;"><i>N</i></span>eon </h1>

                <div class="clear"></div>
                <!--clear-->
            </div>
            <!--nav-col-->
            <div class="cnt-info-col">
                <button type="button" id="toggle-bar"><i class="fa fa-bars"></i></button>
            </div>
            <div class="clear"></div>
            <!--clear-->
        </div>
    </section>

    <div class="menu" style="display:none">
        <a class="active" href="#home">Home</a>
        <a href="#why-choose-us">About US</a>
        <a href="#expand">Services</a>
        <a href="#project">Project</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact Us</a>
        <a href="tel:7652000000">7652000000</a>
    </div>

    @yield('content') 

        <footer>
            <div class="container">
                <div class="footer-col">
                    <h3 style="color:black;">About Us</h3>
                    <p style="color:black;">We focus on the needs of small to middle market businesses to improve and grow their return.so that your site will withstand the test of time. We care about your business, which is why we work with you.</p>
                    <div class="social-icons-footer">
                        <i class="fa fa-facebook-square"></i>
                        <i class="fa fa-twitter-square"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-youtube-square"></i>
                    </div>
                </div>
                <!--footer-col-->
                <div class="footer-col footer-2-col">
                    <h3 style="color:black;">Quick Links</h3>
                    <ul>
                        <li style="color:black;" >Home</li>
                        <li style="color:black;">About Us</li>
                        <li style="color:black;">Services</li>
                        <li style="color:black;">Portfolio</li>
                        <li style="color:black;">Blog</li>
                        <li style="color:black;">Contact Us</li>
                    </ul>
                </div>
                <!--footer-col-->
                <div class="footer-col">
                    <h3 style="color:black;">Contact Us</h3>
                    <p><i class="fa fa-envelope-o"></i> <a style="color:black;" href="mailto:demo@gmail.com">demo@gmail.com</a></p>
                    <p><i class="fa fa-mobile-phone"></i> <a style="color:black;" href="tel:9855000000">9855000000</a></p>
                    <p><i class="fa fa-map-o"></i> <span style="color:black;">27 Division St, New York, NY 10002, US</span></p>
                </div>
                <!--footer-col-->
                <div class="clear"></div>
                <hr class="footer-hr">
                <p style="color:black;" class="copyright-footer">&copy; 2020 — Websblog. All Rights Reserved.</p>
            </div>
        </footer>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <Script src="js/jquery-ui.min.js"></Script>
        <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <Script src="js/extrenaljq.js" type="text/javascript"></Script>
</body>
<script>
    $(document).ready(function() {
        $("#toggle-bar").click(function() {
            $(".menu").slideToggle(400);
        });
    });

</script>


</html>
