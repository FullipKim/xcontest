<?
$name = "성함";
$email = "이메일";
$phone = "제목";
$contents = "문의내용";


$tomail = "help@dataking.co.kr"; //이 폼메일을 받을 메일주소

function error($text){
echo "
  <script language=javascript>
  window.alert('$text')
  history.go(-1)
  </script>";
exit;
}

function msg($text){
echo "
  <script language=javascript>
  window.alert('$text')
  top.location.href = './contact-us.html'
  </script>
";
exit;
}

if (!$name) {error('성명을 적어주세요');} // 이름이 없을때 에러 메세지
if (!$email) {error('메일 주소를 적어주세요');} // 메일주소가 없을때 에러 메세지
if (!$phone) {error('연락처를 적어주세요');} // 연락처 없을때 에러 메세지
if (!$contents) {error('문의내용을 적어주세요');} // 내용 없을때 에러 메세지

$mailheaders = "Return-Path: $email \r\n"; // 메일 헤더의 반송 메일 주소
$mailheaders .= "From: $name <$email>\r\n"; // 메일헤더의 이름과 메일 주소 표시

$body = " 이름 : $name \r\n";
$body .= " 메일주소 : $email \r\n";
$body .= " 연락처 : $phone \r\n";
$body .= " 내 용 : $content \r\n";

$result=mail($tomail , $phone , $body , $mailheaders); // 메일 전송

if($result) {msg('메일이 성공적으로 발송되었습니다.');} // 전송 성공시

else{error('메일 발송에 실패하였습니다. 고객센터로 문의주세요!');} // 전송 실패시

?>