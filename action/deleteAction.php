<?
header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();
$sn_hp_member = member();

if(!$sn_hp_member[sn_hp_member_id])Error("로그인 후 이용해주세요.");

$sn_hp_bbs_no = $_GET[sn_hp_bbs_no];
$sn_hp_bbs_field = $_GET[sn_hp_bbs_field];
$query = "select * from sn_hp_bbs where sn_hp_review_no='$wp_hp_bbs_no' and sn_hp_member_id='$sn_hp_member[sn_hp_member_id]'";
$result = mysql_query($query,$connect);
$data = mysql_fetch_array($result);

if($data[sn_hp_bbs_file]){
    $del_file = '../data/'.$data[sn_hp_bbs_file];
    if($data[sn_hp_bbs_file] && is_file($del_file)) unlink($del_file); // unlink(실제 삭제할 변수명)
}

$query = "delete from sn_hp_bbs where sn_hp_bbs_no ='$sn_hp_bbs_no' and sn_hp_member_id ='$sn_hp_member[sn_hp_member_id]'";
mysql_query($query,$connect);
?>

<script>
    <? if($sn_hp_bbs_field=='01') {?>
    window.alert("글이 삭제되었습니다.");
    location.href="../notice_list.php?sn_hp_bbs_field=<?=$sn_hp_bbs_field?>";
    <?} else{?>
    window.alert("글이 삭제되었습니다.");
    location.href="../review_list.php?sn_hp_bbs_field=<?=$sn_hp_bbs_field?>";
    <? } ?>
</script>
