<!DOCTYPE html>
<html>
<title>SELFN - Q & A detail</title>
<?include ("./common/head.php")?>

<body id="page-top" style="color: #222;">
<!-- Navigation -->
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
    <div class="section-heading text-center">
        <h2>View</h2>
        <p class="text-muted"></p>
        <hr>
    </div>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2 mb-2"></div>
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>TITLE</label>
                            <input type="text" class="form-control" name="wp_shopbbsTitle" maxlength="50" value="" readonly >
                        </div>
                        <div class="form-group">
                            <label>NAME</label>
                            <input type="text" class="form-control" name="wp_shopbbsTitle" maxlength="50" value="" readonly >
                        </div>
                        <div class="form-group">
                            <label>DATE</label>
                            <input type="text" class="form-control" name="wp_shopbbsTitle" maxlength="50" value="" readonly >
                        </div>
                        <div class="form-group">
                            <label>CONTENTS</label>
                            <textarea class="form-control" name="wp_shopbbsContent" rows="10" maxlength="2048" readonly ></textarea>
                        </div>

                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                    <a href="review_list.jsp" class="btn btn-outline-success">list</a>

                    <a href="review_update_form.jsp?bbsID=<%=bbsID %>" class="btn btn-outline-primary">modify</a>
                    <a href="../../deleteAction.jsp?bbsID=<%=bbsID %>" class="btn btn-outline-danger" onclick="return confirm('정말로 삭제하시겠습니까?')">delete</a>
                </div>
                <div class="col-lg-2 mb-2"></div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
</section>
<?include ("./common/footer.php")?>
</body>

</html>
