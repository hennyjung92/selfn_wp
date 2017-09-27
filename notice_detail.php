<!DOCTYPE html>
<html>
<title>SELFN - Notice detail view </title>
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
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-2"></div>
                <!-- Post Content Column -->
                <div class="col-lg-8 col-sm-8">
                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src='../data/<?=$data[sn_hp_bbs_file]?>' alt="" style="display: block; margin-left: auto; margin-right: auto;">
                    <hr>
                    <!-- Date/Time -->
                    <p>Posted on <?=$data[wp_hp_review_date]?></p>
                    <hr>
                    <!-- Post Content -->
                    <p class="lead"><?=$data[wp_hp_review_title]?></p>
                    <p><?=$data[wp_hp_review_content]?></p>
                    <hr>
                </div>
            </div>
            <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                <? if($wp_hp_member[wp_hp_id]!=$data[wp_hp_member_id]){?>
                    <a href="notice_list.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-success">list</a>
                <?}
                else { ?>
                    <a href="notice_list.php?wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-success">list</a>
                    <a href="notice_update.php?wp_hp_review_no=<?=$data[wp_hp_review_no]?>&wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-primary">modify</a>
                    <a href="./action/deleteAction.php?wp_hp_review_no=<?=$data[wp_hp_review_no]?>&wp_hp_field=<?=$wp_hp_field?>" class="btn btn-outline-danger" onclick="return confirm('정말로 삭제하시겠습니까?')">delete</a>
                <?} ?>
            </div>
            <div class="col-lg-2 col-sm-2"></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<? include("./common/footer.php") ?>
</body>
</html>
