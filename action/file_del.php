<?
header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();
$sn_hp_member = member();
if(!$sn_hp_member[sn_hp_member_id])Error("로그인 후 이용해주세요.");
$sn_hp_bbs_no = $_GET[sn_hp_bbs_no];

$query = "select * from sn_hp_bbs where sn_hp_bbs_no='$sn_hp_bbs_no' and sn_hp_member_id='$sn_hp_member[sn_hp_member_id]'";
$result = mysql_query($query,$connect);
$data = mysql_fetch_array($result);
if(!$result)die("연결에 실패하였습니다.".mysql_error());

if($data[sn_hp_bbs_file]){
    $qy = "update sn_hp_bbs set sn_hp_bbs_file = ''
    where sn_hp_bbs_no='$sn_hp_bbs_no' and sn_hp_member_id='$sn_hp_member[sn_hp_member_id]'";
    mysql_query($qy,$connect);

    $del_file = "../data/".$data[sn_hp_bbs_file];
    if($data[sn_hp_bbs_file] && is_file($del_file)) unlink($del_file);
}
mysql_close;
?>

<script>
    alert("파일이 삭제되었습니다.");
    opener.location.reload();
    window.close();
</script>
