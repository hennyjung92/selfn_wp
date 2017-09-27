<?
function dbconn(){
    $host_name="localhost";
    $db_user_id="whopet";
    $db_name="whopet";
    $db_pw="whopet123!";
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
    $wp_hp_member[wp_hp_id] = $_SESSION['wp_hp_id'];
    $query = "select * from wp_hp_member where wp_hp_id='$wp_hp_member[wp_hp_id]'";
    mysql_query("set names utf8",$connect);
    $result = mysql_query($query, $connect);
    $wp_hp_member =  mysql_fetch_array($result);
    return $wp_hp_member;
}
?>