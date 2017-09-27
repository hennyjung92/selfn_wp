<!DOCTYPE html>
<html>
<title>SELFN - Q & A update</title>
<?include ("./common/head.php")?>

<body id="page-top" style="color: #222;">
<!-- Navigation -->
<?include ("./common/header.php")?>

<?
$sn_hp_bbs_field = $_GET[sn_hp_bbs_field];
$sn_hp_bbs_no = $_GET[sn_hp_bbs_no];
$query = "select * from sn_hp_bbs where sn_hp_bbs_no='$sn_hp_bbs_no'";
mysql_query("set names utf8");
$result = mysql_query($query,$connect);
$data = mysql_fetch_array($result);
?>
<script type="text/javascript">
    function cancel(){
        location.href="qna_list.php?sn_hp_bbs_field=<?=$sn_hp_bbs_field?>";
    }
</script>

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
            <h2>Update</h2>
            <p class="text-muted"></p>
            <hr>
        </div>
        <!-- Page Content -->
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-2 mb-2"></div>
                <!-- Map Column -->
                <div class="col-lg-8 mb-4">

                    <form method="post" action="./action/updateAction.php?bbsID=<%=bbsID%>">
                        <div class="form-group">
                            <label>TITLE</label>
                            <input type="text" class="form-control" name="bbsTitle" maxlength="50" value="">
                        </div>
                        <div class="form-group">
                            <label>CONTENTS</label>
                            <textarea class="form-control" name="bbsContent" rows="10" maxlength="2048"></textarea>
                        </div>
                        <div class="form-group">
                            <?if($data[sn_hp_bbs_file]){?>
                                파일 : <?echo "<font>".$data[sn_hp_bbs_file]."</font>";?> &nbsp; &nbsp; &nbsp;
                                <a href="#" onclick ="window.open('./file_del.php?sn_hp_bbs_no=<?=$sn_hp_bbs_no?>','open',
                                    'width=450,height=150, top=50,left=5, scrollbars=no, resizable=no')"><font color="FF0000">[삭제]</font></a>
                            <? } ?>
                            <input type="file" class="form-control-file" name="sn_hp_bbs_file">
                        </div>
                        <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                            <button type="button" class="btn btn-outline-danger" onclick="cancel()">Cancel</button>
                            <input type="submit" class="btn btn-outline-primary" value="Modify">
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
<?include ("./common/footer.php")?>
</body>
</html>
