<!DOCTYPE html>
<html>
<title>SELFN - Prososal for Partnership </title>
<? include("./common/head.php") ?>
    <style>
        @import url(//fonts.googleapis.com/earlyaccess/notosanskr.css);
        .ns { font-family: 'Noto Sans KR', sans-serif; }

        /* Style the tab */
        div.tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: black;
        }

        /* Style the buttons inside the tab */
        div.tab button {
            background-color: inherit;
            /* float: left; */
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 15px;
            font-weight: 600;
        }

        /* Change background color of buttons on hover */
        div.tab button:hover {
            /* background-color: #ddd; */
            text-decoration: underline;
        }

        /* Create an active/current tablink class */
        div.tab button.active {
            /*  background-color: #ccc; */
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            /*     border: 1px solid #ccc; */
            border-top: none;
            height: 400px;
        }

        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 100px;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 100px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 100px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 100px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 100px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        .check{
            margin: 32px 0 30px 0;
            padding: 20px;
            background: #f6f6f6;
            font-size: 14px;
            line-height: 140%;
        }
        .arrow{
            margin-left:10px;
            font-family: 'SECGCWB', sans-serif;"
        }
        .btn-outline {
            color: black;
            border: 1px solid;
            border-color: black
        }

        .btn-outline.active, .btn-outline:active, .btn-outline:focus,
        .btn-outline:hover {
            color: black;
            border-color: black;
            background-color: white
        }

        .btn {
            border-radius: 300px;
            font-family: Lato, Helvetica, Arial, sans-serif;
            letter-spacing: 2px;
            text-transform: uppercase
        }

        .btn-xl {
            font-size: 14px;
            padding: 15px 45px
        }
    </style>

    <script>
        function myFunction() {
            var x = document.getElementById("snackbar")
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

<body id="page-top" style="color: #222;">
<? include("./common/header.php") ?>
<section class="cta1" style="background-image: url('img/handshake.jpg');">
    <div class="cta-content">
        <div class="container" style="text-align: center; position: absolute; left: 50%; transform: translate(-50%, -50%);
    			z-index: 11;">
            <h2 style="font-size:45px; max-width: none;"></h2>
            <!-- <a href="#about" class="btn btn-outline btn-xl js-scroll-trigger">View more</a> -->
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="features" id="about">
    <div class="container">

        <div class="section-heading text-center">
            <h2>Proposal for Partnership</h2>
            <p class="text-muted"></p>
            <hr>
        </div>

        <div class="row">
            <div class="col-lg-1 auto"></div>
            <div class="col-lg-10 auto">
                <div class="tab" style="text-align: center;">
                    <button class="tablinks" onclick="openCity(event, 'info')" style="width: 30%; color:white;">안내</button>
                    <button class="tablinks" onclick="myFunction()" style="width: 30%; color:white;">비즈니스 협력제안</button>
                    <button class="tablinks" onclick="myFunction()" style="width: 30%; color:white;">내 제안 보기</button>
                    <!--
                      <button class="tablinks" onclick="openCity(event, 'info')" style="width: 30%; color:white;">비즈니스 협력제안</button>
                      <button class="tablinks" onclick="openCity(event, 'info')" style="width: 30%; color:white;">내 제안 보기</button> -->
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 auto">

                <div id="info" class="" style="">
                    <div class="row">
                        <div class="col-lg-6">
                            <br>
                            <p style="font-weight: bold; font-size:23px; " class="ns">비즈니스 협력제안</p>
                            <p class="ns" style="font-size:13px;">비즈니스 협력제안은 SELFN과 사업협력을 원하시는 사업자의 기 구현된 기술이 접목된 상품이나 새로운 브랜드 제품을 도입하는 기회를 위해
                                제안을 받는 접수창구로서 사업자 등록이 된 사업자라면 누구나 제안을 등록하실 수 있습니다.</p>
                            <p style="color: red; font-size:13px;">비즈니스 협력제안 외의 내용은 이메일 상담을 이용해 주시기 바랍니다.</p>
                            <a href="contact.html" class="ns" style="font-size:15px; color:black; font-weight:bold; text-decoration: none;">이메일 상담 바로가기
                                <span class="arrow">></span>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <img src="img/handshaking_circle.png" class="img-fluid" alt="">
                        </div>
                        <br>
                    </div>
                    <p class="check ns" style="font-size:14px;">등록 후 담당자가 제안 내용을 검토한 후 추가 정보가 필요하거나 회의가 필요하면 전화나 메일로 연락 드립니다.</p>
                    <p style="text-align:center;">
                        <a href="#partnerModal" class="btn btn-outline btn-xl" data-toggle="modal">비즈니스 협력제안</a>
                    </p>
                </div>
                <br>
                <div id="partner" class="tabcontent" style="text-align:center;">
                    <br>
                    <h5>비즈니스 협력제안</h5>
                    <p>로그인 후 이용 가능 (login 창 띄우기)</p>
                </div>

                <div id="suggest" class="tabcontent" style="text-align:center;">
                    <br>
                    <h5>내 제안 보기</h5>
                    <p>로그인 후 이용 가능 (login 창 띄우기)</p>
                </div>

            </div>
            <div class="col-lg-1"></div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div id="snackbar">로그인 후 이용해주세요.</div>
</section>

<!-- Modal -->
<div class="modal fade" id="partnerModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight:600; font-size: 20px; padding-left:110px;">Proposal for Partnership</h4>
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            </div>
            <div class="modal-body">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" class="form-control" id="name" placeholder="Company / Name" autofocus="autofocus">
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
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<? include("./common/footer.php") ?>
</body>
</html>