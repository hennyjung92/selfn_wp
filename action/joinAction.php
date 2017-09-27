<?header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();

$sn_hp_member_id=$_POST[sn_hp_member_id];
$sn_hp_member_password_security=$_POST[sn_hp_member_password];
$sn_hp_member_password_check=$_POST[sn_hp_member_password_check];
$sn_hp_member_name=$_POST[sn_hp_member_name];
$sn_hp_member_email=$_POST[sn_hp_member_email];
$sn_hp_member_tel=$_POST[sn_hp_member_tel];

$result = mysql_query("select count(*) as total from sn_hp_member where sn_hp_member_id='$sn_hp_member_id'");
//mysql_query("set names utf8",$connect);
//$result = mysql_query($query,$connect);
$data=mysql_fetch_assoc($result);
if($data['total']!=0)Error("존재하는 아이디입니다. 다른 아이디를 입력해주세요");

if(!$sn_hp_member_id)Error("아이디를 입력하세요.");
if(preg_match("/[^a-z A-Z 0-9]/",$sn_hp_member_id))Error("아이디는 영문 소/대문자와 숫자만 허용됩니다.");
if(!$sn_hp_member_password_security)Error("비밀번호를 입력하세요.");
if($sn_hp_member_password_security!=$sn_hp_member_password_check)Error("비밀번호가 일치하지 않습니다. 다시 입력해주세요");
if(!$sn_hp_member_name)Error("이름을 입력하세요.");
if(!$sn_hp_member_email)Error("이메일을 입력하세요.");
if(!$sn_hp_member_tel)Error("휴대폰 번호를 입력하세요.");

$sn_hp_member_password = md5($sn_hp_member_password_security); // 비번 암호화
// 쿼리전송
$query = "insert into sn_hp_member(sn_hp_member_id,sn_hp_member_password,sn_hp_member_name,sn_hp_member_email,sn_hp_member_tel) 
          values('$sn_hp_member_id','$sn_hp_member_password','$sn_hp_member_name','$sn_hp_member_email','$sn_hp_member_tel')";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);

mysql_close; // mysql 끝내기
?>

<script>
    window.alert("회원가입이 완료되었습니다.");
    location.href="../index.php";
</script>