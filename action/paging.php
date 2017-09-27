<style>
    .pagination {
        display: inline-block;
    }

    .pagination a, strong {
        color: black;
        float: left;
        padding: 8px 13px;
        text-decoration: none;
        transition: background-color .3s;
    }
</style>
<div id='page_1' class="pagination">
    <?
    $sn_hp_bbs_field = $_GET[sn_hp_bbs_field];
    // 총 게시물 $total
    // 한페이지 수 $view_total
    $rr = ceil($total / $view_total); // $rr : 총 페이지 수

    // 이전 페이지
    $before = $_page -1; // 현재 페이지수 -1
    if($before<1)($before=1);

    // 다음 페이지
    $next = $_page +1;
    if($next>$rr)($next=$rr);

    // 그룹 페이지 구성
    if($_page%10){$goto=$_page-$_page%10 + 1; // 한 그룹당 페이지 10개 -> 10을 넘기면 1 증가
    }elseif($goto =$_page-9); // 10의 배수가 아닐 경우 -9

    $last = $goto+10; // ex) $goto = 1 -> last = 11 이 되어야 함

    // 이전 페이지 그룹 출력
    $before_group = $goto-1;
    if($before_group<1)($before_group=1);
    if($_page !=1) echo("<a href=$PHP_SELF?_page=$before_group&sn_hp_bbs_field=$sn_hp_bbs_field$href>&laquo;</a>&nbsp;"); // 이전 페이지 그룹 출력

    // 페이지 번호 출력
    for($e = $goto; $e<$last; $e++){ // 현재 페이지가 전체 페이지보다 작으면 페이지 증가
        if($e >$rr) break; // 총 나타날 페이지 번호보다 크면 멈추고 다음 실행
        if($e==$_page) echo("<strong>$e</strong>");
        else{
            echo("&nbsp; <a href=$PHP_SELF?_page=$e&sn_hp_bbs_field=$sn_hp_bbs_field$href>$e</a>&nbsp;");
        }
    }

    // 다음 페이지 그룹 출력
    $next_group = $last;
    if($next_group>$rr)($next_group=$rr); // next group이 rr 보다 크면 rr이 next group이 됨
    if($_page!=$rr) echo("&nbsp; <a href=$PHP_SELF?_page=$next_group&sn_hp_bbs_field=$sn_hp_bbs_field$href>&raquo;</a>");

    ?>
</div>
