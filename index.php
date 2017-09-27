<!DOCTYPE html>
<html>
<title>SELFN - Self Network</title>
<? include("./common/head.php") ?>
<? include("./common/gototop.php") ?>

<body id="page-top">
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<? include("./common/header.php") ?>
<section class="cta1">
    <div class="cta-content">
        <div class="container">
            <h2>Build your own network.</h2>
            <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="download bg-primary text-center" id="download">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="section-heading">Device & App Introduction</h2>

                <p>Our app is available on any mobile device! Download now to get started!</p>
                <div class="badges">
                    <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
                    <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features" id="features">
    <div class="container">
        <div class="section-heading text-center">
            <h2>OUR SERVICES</h2>
            <p class="text-muted">Check out what you can do with our app!</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-4 my-auto">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device">
                            <div class="screen">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                <img src="img/.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="button">
                                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-shield text-primary"></i>
                                <h3>Senior Security Guard</h3>
                                <p class="text-muted">Short Description</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-user-female text-primary"></i>
                                <h3>Female Guard</h3>
                                <p class="text-muted">Short Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="fa fa-paw text-primary"></i>
                                <h3>Pet Tracker</h3>
                                <p class="text-muted">Short Description</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-lock text-primary"></i>
                                <h3>Ankle Monitor</h3>
                                <p class="text-muted">Short Description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta2">
    <div class="cta-content">
        <div class="container">

            <h2>Vehicle Tracking.</h2>
            <!-- <h2>Vehicle Position Tracker</h2> -->
            <a href="service.php" class="btn btn-outline btn-xl">View more</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="contact bg-primary" id="contact">
    <div class="container">
        <h2>We
            <i class="fa fa-heart"></i>
            new friends!</h2>
        <ul class="list-inline list-social">
            <li class="list-inline-item social-twitter">
                <a href="https://twitter.com/" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item social-facebook">
                <a href="#">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item social-youtube">
                <a href="#">
                    <i class="fa fa-youtube"></i>
                </a>
            </li>
        </ul>
    </div>
</section>
<? include("./common/footer.php"); ?>
</body>
</html>
