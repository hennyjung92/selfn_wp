<!DOCTYPE html>
<html>
<title>SELFN - Notice </title>
<? include("./common/head.php") ?>
<style>
    #mainNav .navbar-nav>li>a, #mainNav .navbar-nav>li>a:focus, #mainNav .navbar-nav>li>div>a, #mainNav .navbar-nav>li>div>a:focus {
        color: black;
    }
    #mainNav .navbar-nav>li>a:focus:hover, #mainNav .navbar-nav>li>a:hover, #mainNav .navbar-nav>li>div>a:focus:hover,
    #mainNav .navbar-nav>li>div>a:hover {
        color: black;
    }
</style>

<body id="page-top" style="color: #222;">
<? include("./common/header.php") ?>
<section class="features" id="about">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Notice</h2>
            <p class="text-muted"></p>
            <hr>
        </div>

        <div class="row" style="padding-bottom:50px;">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/notice1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="font-weight: 400;">Notice 1</h3>
                <p>lor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem  illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="#">View More
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <hr>
        <div class="row" style="padding-bottom:50px;">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/notice2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="font-weight: 400;">Notice 2</h3>
                <p>lor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem  illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="#">View More
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <hr>
        <div class="row" style="padding-bottom:50px;">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/notice3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="font-weight: 400;">Notice 3</h3>
                <p>lor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem  illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="#">View More
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
        <a href="notice_write.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-primary pull-right">Write</a>
    </div>
</section>
<? include("./common/footer.php") ?>
</body>
</html>
