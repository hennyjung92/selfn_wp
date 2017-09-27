<?header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();

$sn_hp_member_id=$_POST[sn_hp_member_id];
$sn_hp_member_password_security=$_POST[sn_hp_member_password];
$sn_hp_member_password = md5($sn_hp_member_password_security); // 비번 암호화

// 쿼리전송
$query = "select * from sn_hp_member where sn_hp_member_id='$sn_hp_member_id'";
mysql_query("set names utf8",$connect);
$result = mysql_query($query,$connect);
$sn_hp_member = mysql_fetch_array($result);

if(!$sn_hp_member_id){
    Error("아이디를 입력하세요");}
elseif(!$sn_hp_member[sn_hp_member_id])Error("존재하지 않는 회원 아이디입니다.");

if(!$sn_hp_member_password){
    Error("비밀번호를 입력하세요");}
elseif($sn_hp_member[sn_hp_member_password]!=$sn_hp_member_password)Error("비밀번호가 잘못되었습니다.");

if($sn_hp_member[sn_hp_member_id] and $sn_hp_member[sn_hp_member_password]==$sn_hp_member_password) {
    session_start();
    $_SESSION['sn_hp_id']=$sn_hp_member[sn_hp_member_id];
}
?>

<script>
    window.alert("<?=$sn_hp_member[sn_hp_member_id];?>님 환영합니다!");
    location.href="../index.php";
</script>