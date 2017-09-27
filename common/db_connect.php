<?
function dbconn(){
    $host_name="localhost";
    $db_user_id="selfg";
    $db_name="selfg";
    $db_pw="selfg12";
    $connect = mysql_connect($host_name,$db_user_id,$db_pw);
    mysql_query("set names utf8",$connect);
    mysql_select_db("$db_name",$connect);
    if(!$connect)die("연결에 실패했습니다.".mysql_error());
    return $connect;
}

//에러 메세지 출력
function Error($msg){
    echo "
    <script>
    window.alert('$msg');
    history.back();
</script>
    ";
    exit;
}

function member(){
    global $connect;
    session_start();
    $sn_hp_member[sn_hp_member_id] = $_SESSION['sn_hp_member_id'];
    $query = "select * from sn_hp_member where sn_hp_member_id='$sn_hp_member[sn_hp_member_id]'";
    mysql_query("set names utf8",$connect);
    $result = mysql_query($query, $connect);
    $sn_hp_member =  mysql_fetch_array($result);
    return $sn_hp_member;
}
?>