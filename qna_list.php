<!DOCTYPE html>
<html>
<title>SELFN - Q & A </title>
<? include("./common/head.php") ?>

<body id="page-top" style="color: #222;">
<? include("./common/header.php") ?>
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
            <h2>Q & A</h2>
            <p class="text-muted"></p>
            <hr>
        </div>
        <?

        $sn_hp_bbs_field = $_GET[sn_hp_bbs_field];
        $_page = $_GET[_page];

        $view_total = 10; // 한 페이지에 보이는 수
        if(!$_page)($_page=1); // 페이지 번호가 지정이 안되었을 경우
        $page = ($_page-1)*$view_total;

        $query = "select count(*) from sn_hp_bbs where sn_hp_bbs_field='$sn_hp_bbs_field'"; // 총 게시글 수
        mysql_query("set names utf8");
        $result = mysql_query($query, $connect);
        $temp = mysql_fetch_array($result);
        $total = $temp[0];
        ?>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1">
                </div>
                <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10">
                    <table class="table table-hover" style="text-align:center;">
                        <thead class="thead-default" >
                        <tr>
                            <th style="text-align:center;">No</th>
                            <th style="text-align:center;">Title</th>
                            <th style="text-align:center;">ID</th>
                            <th style="text-align:center;">Date</th>
                            <th style="text-align:center;">Hit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $query = "select * from sn_hp_bbs where sn_hp_field ='$sn_hp_bbs_field' order by sn_hp_bbs_no desc limit $page, $view_total";
                        $result = mysql_query($query, $connect);
                        $cnt = 1; // 게시물 나열 번호
                        while($data = mysql_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?=$cnt?></td>
                            <td><a href="qna_detail.php?sn_hp_bbs_no=<?=$data[sn_hp_bbs_no]?>&sn_hp_bbs_field=<?=$sn_hp_bbs_field?>">
                                    <?=$data[sn_hp_bbs_title]?></a></td>
                            <td><?=$data[sn_hp_member_id]?></td>
                            <td><?=$data[sn_hp_bbs_date]?></td>
                            <td><?=$data[sn_hp_bbs_hit]?></td>
                            <?
                            $cnt++;
                            }
                            ?>
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <? include('paging.php');?>
                            </div>
                            <a href="qna_write.php?sn_hp_bbs_field=<?=$sn_hp_bbs_field?>" class="btn btn-outline-primary pull-right">Write</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"></div>
            </div>
        </div>
    </div>
</section>
<? include("./common/footer.php") ?>
</body>
</html>
