<?
header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();
$wp_hp_member = member();

if(!$wp_hp_member[wp_hp_id])Error("로그인 후 이용해주세요.");

$wp_hp_review_no = $_GET[wp_hp_review_no];
$wp_hp_field = $_GET[wp_hp_field];
$query = "select * from wp_hp_reviewBBS where wp_hp_review_no='$wp_hp_review_no' and wp_hp_member_id='$wp_hp_member[wp_hp_id]'";
$result = mysql_query($query,$connect);
$data = mysql_fetch_array($result);

if($data[file01]){
    $del_file = '../data/'.$data[file01];
    if($data[file01] && is_file($del_file)) unlink($del_file); // unlink(실제 삭제할 변수명)
}

$query = "delete from wp_hp_reviewBBS where wp_hp_review_no ='$wp_hp_review_no' and wp_hp_member_id ='$wp_hp_member[wp_hp_id]'";
mysql_query($query,$connect);
?>

<script>
    <? if($wp_hp_field=='05') {?>
    window.alert("글이 삭제되었습니다.");
    location.href="../notice_list.php?wp_hp_field=<?=$wp_hp_field?>";
    <?} else{?>
    window.alert("글이 삭제되었습니다.");
    location.href="../review_list.php?wp_hp_field=<?=$wp_hp_field?>";
    <? } ?>
</script>
