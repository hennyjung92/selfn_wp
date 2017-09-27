<!DOCTYPE html>
<html>
<title>SELFN - Support</title>
<? include("./common/head.php") ?>
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            width: 60%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 18px;
            background-color: white;
            background-image: url('img/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;

        }

        #myInput:focus + #myUL{
            width:60%;
            display:block;
        }

        #myUL {
            display:none;
            list-style-type: none;
            padding: 0;
            margin: 0;

        }

        #myUL li a {
            border: 1px solid white;
            background-color: white;
            padding: 12px;
            text-decoration: none;
            font-size: 16px;
            color: black;
            display: block
        }

        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }

    </style>

    <script>
        function myFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";

                }
            }
        }

    </script>

<body id="page-top">
<? include("./common/header.php") ?>

<section class="cta1" style="background-image: url('img/support1.jpg'); height:600px;">
    <div class="cta-content">
        <div class="container" style="text-align: center; position: absolute; left: 50%; transform: translate(-50%, -50%);
    			z-index: 11;">
            <h2 style="font-size:45px; max-width: none;">Welcome to SELFN Support</h2>
            <!-- <input type="text" name="search" placeholder="Search Support"> -->

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Support" >
            <ul id="myUL" style="margin-right: auto; margin-left: auto; text-align:left; height:0;">
                <li><a href="notice_list.php">Notice</a></li>
                <li><a href="download.html">Firmware Downloads</a></li>
                <li><a href="qna_list.php">FAQs</a></li>
                <li><a href="partner.html">Proposal for Partnership</a></li>
            </ul>

        </div>
    </div>
    <div class="overlay"></div>
</section>
<section class="features" id="about">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Get Help</h2>
            <p class="text-muted" style="letter-spacing: .010em;">We're here to help you get information about<br>Notice, Firmware Download, FAQs, Proposal for Partnership</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-3 my-auto">
                <div class="device-container text-center">
                    <a href="notice.html"><i class="fa fa-lightbulb-o fa-4x" aria-hidden="true" style="padding-bottom:10px;"></i></a>
                    <p style="color: #484d53!important;">Notice</p>
                </div>
            </div>
            <div class="col-lg-3 my-auto">
                <div class="device-container text-center">
                    <a href="download.html"><i class="fa fa-folder-open-o fa-4x" aria-hidden="true" style="padding-bottom:10px;"></i></a>
                    <p style="color: #484d53!important;">Download</p>
                </div>
            </div>
            <div class="col-lg-3 my-auto">
                <div class="device-container text-center">
                    <a href="qna.html"><i class="fa fa-commenting fa-4x" aria-hidden="true" style="padding-bottom:10px;"></i></a>
                    <p style="color: #484d53!important;">Q&A</p>
                </div>
            </div>
            <div class="col-lg-3 my-auto">
                <div class="device-container text-center">
                    <a href="partner.html"><i class="fa fa-handshake-o fa-4x" aria-hidden="true" style="padding-bottom:10px;"></i></a>
                    <p style="color: #484d53!important;">Partnership</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<? include("./common/footer.php") ?>
</body>
</html>