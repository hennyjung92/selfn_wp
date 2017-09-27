<!DOCTYPE html>
<html>
<title>SELFN - Q & A detail</title>
<?include ("./common/head.php")?>

<body id="page-top" style="color: #222;">
<!-- Navigation -->
<?include ("./common/header.php")?>
<?
if(!$sn_hp_member[sn_hp_member_id])Error("로그인 후 이용해주세요.");
$sn_hp_bbs_no = $_GET[sn_hp_bbs_no];
$sn_hp_bbs_field = $_GET[sn_hp_bbs_field];
$bbs =$sn_hp_bbs_no;
$_query = "update sn_hp_bbs set sn_hp_bbs_hit =sn_hp_bbs_hit+1 where sn_hp_bbs_no = '$sn_hp_bbs_no'";
mysql_query($_query, $connect);
?>
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
    <?
    $query = "select * from sn_hp_bbs where sn_hp_bbs_no='$sn_hp_bbs_no'";
    mysql_query("set names utf8");
    $result = mysql_query($query,$connect);
    $data = mysql_fetch_array($result);
    ?>
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
                            <input type="text" class="form-control" name="sn_shopbbsTitle" maxlength="50" value="<?=$data[sn_hp_bbs_title]?>" readonly >
                        </div>
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" class="form-control" name="sn_shopbbsTitle" maxlength="50" value="<?=$data[sn_hp_member_id]?>" readonly >
                        </div>
                        <div class="form-group">
                            <label>DATE</label>
                            <input type="text" class="form-control" name="sn_shopbbsTitle" maxlength="50" value="<?=$data[sn_hp_bbs_date]?>" readonly >
                        </div>
                        <? if($data[sn_hp_bbs_date]){?>
                            <div>
                                <img src='../data/<?=$data[sn_hp_bbs_date]?>' class="img-fluid">
                            </div>
                        <?} else{ ?>
                        <? } ?>
                        <br>
                        <div class="form-group">
                            <label>CONTENTS</label>
                            <textarea class="form-control" name="sn_shopbbsContent" rows="10" maxlength="2048" readonly ><?=$data[sn_hp_bbs_content]?></textarea>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div class="text-center" style="padding-top:20px; padding-bottom:30px;">
                    <? if($sn_hp_member[sn_hp_id]!=$data[sn_hp_member_id]){?>
                        <a href="bbs_list.php?sn_hp_field=<?=$sn_hp_field?>" class="btn btn-outline-success">list</a>
                    <?}
                    else { ?>
                        <a href="bbs_list.php?sn_hp_field=<?=$sn_hp_field?>" class="btn btn-outline-success">list</a>
                        <a href="bbs_update.php?sn_hp_bbs_no=<?=$data[sn_hp_bbs_no]?>&sn_hp_field=<?=$sn_hp_field?>" class="btn btn-outline-primary">modify</a>
                        <a href="deleteAction.php?sn_hp_bbs_no=<?=$data[sn_hp_bbs_no]?>&sn_hp_field=<?=$sn_hp_field?>" class="btn btn-outline-danger" onclick="return confirm('정말로 삭제하시겠습니까?')">delete</a>
                    <?} ?>                </div>
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
