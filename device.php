<!DOCTYPE html>
<html>
<title>SELFN - Device</title>
<? include("./common/head.php") ?>
<? include("./common/gototop.php") ?>

<body id="page-top">
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<? include("./common/header.php") ?>

<section class="cta1" style="background-image: url('img/device.jpg');">
    <div class="cta-content">
        <div class="container">
            <h2>SELFN Device</h2>
            <a href="#device" class="btn btn-outline btn-xl js-scroll-trigger">View more</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="features" id="device">
    <div class="container">
        <div class="section-heading text-center">
            <h2>OUR DEVICE</h2>
            <p class="text-muted">Characteristic</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-4 my-auto">
                <div class="device-container text-center">
                    <img src="device-mockups/apple_watch/edition/rose.png" class="img-fluid" style="height:300px;" alt="">
                </div>
            </div>
            <div class="col-lg-8 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-compass text-primary"></i>
                                <h3>Function 1</h3>
                                <p class="text-muted">Identify occupant's indoor location</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-directions text-primary"></i>
                                <h3>Function 2</h3>
                                <p class="text-muted">Identify the movement</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-chart text-primary"></i>
                                <h3>Function 3</h3>
                                <p class="text-muted">Utilizing Movement Statistics</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-globe text-primary"></i>
                                <h3>Function 4</h3>
                                <p class="text-muted">Available worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta2" style="background-image: url('img/howtobuy1.jpg');">
    <div class="cta-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>HOW TO BUY</h2>
                    <a href="#difference" class="btn btn-outline btn-xl js-scroll-trigger">GO TO SHOP</a>
                </div>
                <div class="col-lg-6 text-center" id="device_price" style="color: white;">
                    <p>PRICE</p>
                    <h3>50,000</h3><br>
                    <p>Once you buy, No more payment.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="features" id="device">
    <div class="container">
        <div class="section-heading text-center">
            <h2>CONTACT</h2>
            <p class="text-muted">ASK US ANYTHING ABOUT OUR DEDICE!</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-2 my-auto">
            </div>
            <div class="col-lg-8 my-auto">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="tel" class="form-control" id="phone" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="email" class="form-control" id="email" placeholder="Subject">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <textarea rows="10" cols="100" class="form-control" id="message" placeholder="Message.." maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-outline-primary pull-right">Submit</button>
                </form>
            </div>
            <div class="col-lg-2 my-auto">
            </div>
        </div> <!--row -->
    </div> <!-- container -->
</section>
<? include("./common/footer.php") ?>
</body>
</html>
