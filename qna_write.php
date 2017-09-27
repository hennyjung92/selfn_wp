<!DOCTYPE html>
<html>
<title>SELFN - Q & A write</title>
<?include ("common/head.php")?>

<body id="page-top" style="color: #222;">
<?include ("./common/header.php")?>
<section class="cta1" style="background-image: url('img/map1.jpg');">
    <div class="cta-content">
        <div class="container" style="text-align: center; position: absolute; left: 50%; transform: translate(-50%, -50%);
    			z-index: 11;">
            <h2 style="font-size:45px; max-width: none;">Have a question? Ask everything.</h2>
            <!-- <a href="#about" class="btn btn-outline btn-xl js-scroll-trigger">View more</a> -->
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="features" id="about">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Write</h2>
            <p class="text-muted"></p>
            <hr>
        </div>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-2 mb-2"></div>
                <!-- Map Column -->
                <div class="col-lg-8 mb-4">

                    <form method="post" action="${pageContext.request.contextPath}/writeAction.jsp">
                        <div class="form-group">
                            <label>TITLE</label>
                            <input type="text" class="form-control" name="bbsTitle" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label>CONTENTS</label>
                            <textarea class="form-control" name="bbsContent" rows="10" maxlength="2048"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        </div>
                        <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                            <button type="button" class="btn btn-outline-danger" onclick="cancel()">Cancel</button>
                            <input type="submit" class="btn btn-outline-primary" value="Register">
                            <!-- <button type="button" class="btn btn-outline-primary" onclick="register()">Register</button> -->
                        </div>
                    </form>

                </div> <!-- Contact Details Column -->
                <div class="col-lg-2 mb-2"></div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
</section>
<? include("./common/footer.php") ?>
</body>
</html>
