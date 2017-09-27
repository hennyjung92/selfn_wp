<? header("content-type:text/html; charset=UTF-8");

include("db_connect.php");
$connect = dbconn();
$sn_hp_member = member();

if(!$sn_hp_member[sn_hp_member_id])Error("로그인 후 이용해주세요.");

$sn_hp_bbs_title = $_POST[sn_hp_bbs_title];
$sn_hp_bbs_content = $_POST[sn_hp_bbs_content];
$sn_hp_bbs_no = $_POST[sn_hp_bbs_no];
$sn_hp_bbs_field = $_POST[sn_hp_bbs_field];
if(!$sn_hp_bbs_title)Error("제목을 입력하세요.");
if(!$sn_hp_bbs_content)Error("내용을 입력하세요.");

if($_FILES[sn_hp_bbs_file][name]){
    $_FILES['sn_hp_bbs_file']['size'];
    if($size > 2097152)Error("파일용량 :2MB로 제한합니다.");

    $file01_name = strtolower($_FILES['sn_hp_bbs_file']['name']); // 파일명과 확장자를 소문자로 변경
    $file01_split = explode(".", $file01_name); // 파일명과 확장자 분리

    $extexplode = $file01_split[count($file01_split)-2.3]; // 파일명만 가져오기
    $file01_type = $file01_split[count($file01_split)-1]; // 확장자만 가져오기

    $img_ext = array('jpg','jpeg','gif','png'); // 이 확장자만 저장 가능 - 확장자 종류 배열에 넣는다
    if(array_search($file01_type,$img_ext)===false)Error("이미지 파일이 아닙니다.");

    $tates = date("mdhis",time()); // 날짜 (월일시간분초)
    $newFile01 = chr(rand(97,122)).chr(rand(97,122)).$tates.rand(1,9).rand(1,9).".".$file01_type; // 파일명 생성 - 파일 중복 방지

    $dir ="../data/"; // 업로드 디렉토리 지정
    move_uploaded_file($_FILES['sn_hp_bbs_file']['tmp_name'],$dir.$newFile01); // tmp_name : 임시 파일 경로
    chmod($dir.$newFile01,0777);

    $query = "update sn_hp_bbs set sn_hp_bbs_file='$newFile01'
              where sn_hp_bbs_no = '$sn_hp_bbs_no'";
    mysql_query($query,$connect);
}

$query = "update sn_hp_bbs 
          set sn_hp_bbs_title='$sn_hp_bbs_title',
              sn_hp_bbs_content ='$sn_hp_bbs_content'
          where sn_hp_bbs_no = '$sn_hp_bbs_no'
              ";
mysql_query("set names utf8", $connect);
mysql_query($query, $connect);

mysql_close;
?>

<script>
    window.alert("수정되었습니다.");
    location.href="../bbs_detail.php?sn_hp_bbs_no=<?=$sn_hp_bbs_no?>&sn_hp_bbs_field=<?=$sn_hp_bbs_field?>";
</script>
