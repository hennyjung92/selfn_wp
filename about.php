<!DOCTYPE html>
<html>
<title>SELFN - About</title>
<? include("./common/head.php") ?>
<? include("./common/gototop.php") ?>
<body id="page-top">
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<? include("./common/header.php") ?>
<section class="cta1" style="background-image: url('img/earth.jpg');">
    <div class="cta-content">
        <div class="container">
            <h2>SELFN- Self Network</h2>
            <a href="#about" class="btn btn-outline btn-xl js-scroll-trigger">View more</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="features" id="about">
    <div class="container">

        <div class="section-heading text-center">
            <h2>What is SELFN?</h2>
            <p class="text-muted">An integrated name for device, apps, and web solutions<br>that enable you to track your location from anywhere in the network.</p>
            <hr>
        </div>

        <div class="row">
            <div class="col-lg-4 my-auto">
                <div class="device-container text-center">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="device-mockups/apple_watch/edition/rose.png" class="img-fluid" style="height:250px;" alt="">
                </div>
            </div>
            <div class="col-lg-4 my-auto">
                <div class="device-container text-center">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="device-mockups/iphone_6_plus/iphone_6_plus_white_port.png" class="img-fluid" style="height:300px;" alt="">
                </div>
            </div>
            <div class="col-lg-4 my-auto">
                <div class="device-container text-center">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="device-mockups/macbook/macbook.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="feature-item">
                    <h3>Device</h3>
                    <!-- <p class="text-muted">Short Description</p> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-item">
                    <h3>App</h3>
                    <!-- <p class="text-muted">Short Description</p> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-item">
                    <h3>Web Solution</h3>
                    <!-- <p class="text-muted">Short Description</p> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta2" style="background-image: url('img/subway7.jpg');">
    <div class="cta-content">
        <div class="container">

            <h2>Our Differences</h2>
            <p style="color:white;">Real-time location tracking in indoor and underground.</p>
            <a href="#difference" class="btn btn-outline btn-xl js-scroll-trigger">View more</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section id="difference">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" style="width:400px;" src="img/about-underground.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4">Building</h2>
                    <p style="font-weight: 700;">Can be tracked in the basement & inside the building</p>
                    <p>
                        Previously, it was not possible to track the location in the basement and inside the building,
                        but SELFN can track the exact location in the underground and inside the building.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid" src="img/about-tracking.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4">Map</h2>
                    <p style="font-weight: 700;">Track on the map simultaneously with the connection</p>
                    <p>
                        If pet goes beyond a certain distance,
                        SELFN provides notifications on the map as well as a tracking function
                        instead of a simple loss notification.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid" src="img/about-usingpc.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4">PC Available</h2>
                    <p style="font-weight: 700;">Can trace to PC without smartphone</p>
                    <p>
                        In the past, location tracking service was not available without a smartphone,
                        but SELFN can track the location on a PC without a smartphone.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid" src="img/about-unlimitedservice.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4">Unlimited Service</h2>
                    <p style="font-weight: 700;">Provides unlimited service for device purchase</p>
                    <p>We provide unlimited service when purchasing device, not monthly payment after monthly subscription.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<? include("./common/footer.php"); ?>
</body>
</html>
