<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php"><img src="../img/yellow.png" class="img-responsive" height="35"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../device.php">DEVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../service.php">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../contact.php">CONTACT</a>
                </li>
                <li class="nav-item" >
                    <div class="dropdown">
                        <a class="nav-link" href="../support.php">Support ></a>
                        <div class="dropdown-content" style="font-size: 13px;" >
                            <a href="../notice_list.php"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Notice</a>
                            <a href="../download.php"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Download</a>
                            <a href="../qna_list.php"><i class="fa fa-commenting" aria-hidden="true"></i> Q&A</a>
                            <a href="../partner.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Partner</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link"><i class="fa fa-user-o fa-lg" aria-hidden="true"></i></a>
                        <div class="dropdown-content" style="font-size: 13px;">
                            <a href="#joinModal" data-toggle="modal"><i class="icon-note" style="font-weight: bold;"></i> Join us</a>
                            <a href="#loginModal" data-toggle="modal"><i class="icon-power" style="font-weight: bold;"></i> Login</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="gotoshop()"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- joinModal -->
<div class="modal fade" id="joinModal" role="dialog" style="text-align:center;">
    <div class="modal-dialog" style="width:350px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title" style="font-weight: bold;">Sign up</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="../action/joinAction.php">
                    <div class="form-group" style="text-align:left;">
                        <label style="font-weight: bold;">ID</label>
                        <input type="text" class="form-control" placeholder="Enter your ID." name="wp_hp_id" minlength="4" maxlength="12" autofocus="">
                    </div>
                    <div class="form-group" style="text-align:left;">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter your password." name="wp_hp_password">
                    </div>
                    <div class="form-group" style="text-align:left;">
                        <label>Password Check</label>
                        <input type="password" class="form-control" placeholder="Enter your password again." name="wp_hp_password_check">
                    </div>
                    <div class="form-group" style="text-align:left;">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name." name="wp_hp_name">
                    </div>
                    <div class="form-group" style="text-align:left;">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email." name="wp_hp_email">
                    </div>
                    <div class="form-group" style="text-align:left;">
                        <label>Tel</label>
                        <input type="tel" class="form-control" placeholder="Enter your phone number." name="wp_hp_tel"><br>
                    </div>
                    <hr>
                    <div class="text-center">
                        <input type="submit" class="btn btn-outline-primary" value="Register">
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="padding-right:220px;">
            </div>
        </div>
    </div>
</div>

<!-- loginModal -->
<div class="modal fade" id="loginModal" role="dialog" style="text-align:center;">
    <div class="modal-dialog" style="width:350px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title" style="font-weight: bold;">Welcome to SELFN!</h5>
            </div>
            <div class="modal-body">
                <form class="form-signin" method="post" action="../action/loginAction.php" style="padding-top:20px;">
                    <input type="text" class="form-control" placeholder="Enter your ID" name="wp_hp_id" maxlength="20" autofocus=""><br>
                    <input type="password" class="form-control" placeholder="Enter your password" name="wp_hp_password" maxlength="20"><br><br>
                    <span style="text-align:center;"><input type="submit" class="btn btn-primary center-block" value="Login"></span>
                </form>
            </div>
            <div class="modal-footer" style="padding-right:220px;">
            </div>
        </div>
    </div>
</div>