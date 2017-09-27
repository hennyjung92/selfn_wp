<!DOCTYPE html>
<html>
<title>SELFN - Contact</title>
<? include("./common/head.php") ?>
    <style>
        #map {
            height: 400px;
            width: 100%;
            frameborder:0;
            scrolling:no;
            marginheight:0;
            marginwidth:0;
        }
    </style>

<body id="page-top">
<? include("./common/header.php") ?>
<section class="cta1" style="background-image: url('img/contact.jpg');">
    <div class="cta-content">
        <div class="container">
            <h2>Contact Us</h2>
            <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">View more</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="features" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 mb-2"></div>
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <!-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe> -->
                <div id="map"></div>
                <script>
                    function initMap() {
                        var location = {lat: 37.403509, lng: 127.100996};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 17,
                            center: location
                        });
                        var marker = new google.maps.Marker({
                            position: location,
                            map: map
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ2vMafaaxLnix9bZJgadVXngjy4xepLM&callback=initMap">
                </script>
            </div>
            <div class="col-lg-2 mb-2"></div>
        </div>
        <div class="row">
            <div class="col-lg-2 mb-2"></div>
            <div class="col-lg-4 mb-4">
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    255, Pangyo-ro, Bundang-gu, Seongnam-si, Gyeonggi-do, Republic of Korea
                    <br>
                </p>
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i> 82-70-7517-6246
                </p>
                <p>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="mailto:name@example.com">help@selfn.com
                    </a>
                </p>
                <p>
                    <i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Fri : 9:00 - 18:00
                </p>
            </div>
            <div class="col-lg-4 mb-4">
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
            <div class="col-lg-2 mb-2"></div>
        </div>
    </div>
</section>
<? include("./common/footer.php") ?>
</body>
</html>
