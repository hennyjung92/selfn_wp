<?
header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();
$wp_hp_member = member();
if(!$wp_hp_member[wp_hp_id])Error("로그인 후 이용해주세요.");
$wp_hp_review_no = $_GET[wp_hp_review_no];

$query = "select * from wp_hp_reviewBBS where wp_hp_review_no='$wp_hp_review_no' and wp_hp_member_id='$wp_hp_member[wp_hp_id]'";
$result = mysql_query($query,$connect);
$data = mysql_fetch_array($result);
if(!$result)die("연결에 실패하였습니다.".mysql_error());

if($data[file01]){
    $qy = "update wp_hp_reviewBBS set file01 = ''
    where wp_hp_review_no='$wp_hp_review_no' and wp_hp_member_id='$wp_hp_member[wp_hp_id]'";
    mysql_query($qy,$connect);

    $del_file = "../data/".$data[file01];
    if($data[file01] && is_file($del_file)) unlink($del_file);
}
mysql_close;
?>

<script>
    alert("파일이 삭제되었습니다.");
    opener.location.reload();
    window.close();
</script>
