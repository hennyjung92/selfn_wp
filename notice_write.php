<!DOCTYPE html>
<html>
<title>SELFN - Notice write</title>
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

        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-2 mb-2"></div>
                <!-- Map Column -->
                <div class="col-lg-8 mb-4">

                    <form method="post" action="noticeWriteAction.php" enctype="multipart/form-data">
                        <input type="hidden" name="wp_hp_field" value="<?=$wp_hp_field?>">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" class="form-control" name="wp_hp_id" value="<?=$wp_hp_member[wp_hp_id]?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label>TITLE</label>
                            <input type="text" class="form-control" name="wp_hp_review_title" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label>Short description</label>
                            <textarea class="form-control" name="wp_hp_review_summary" rows="5" maxlength="1024"></textarea>
                        </div>
                        <div class="form-group">
                            <label>CONTENTS</label>
                            <textarea class="form-control" name="wp_hp_review_content" rows="10" maxlength="2048"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file" name="file01">
                        </div>
                        <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                            <button type="button" class="btn btn-outline-danger" onclick="cancel()">Cancel</button>
                            <input type="submit" class="btn btn-outline-primary" value="Register">
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
