<?php
header('Content-Type: ext/html; charset=utf-8');
include "../db.php";
if(isset($_SESSION['userid'])){

	$sql = mq("select * from member");
	$member = $sql->fetch_array();
?>
<!doctype html>
<head>
<meta charset="utf-8">
<title>my page</title>
<script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
</head>
<body>
<form>
<h1>회원가입 폼</h1>
<fieldset>
<legend>수정사항</legend>
<table>
<table>
<input= type="submit" value"수정하기" />


</fieldset>
</form>
</body>
</html>
<?php
}else{
	ehco "<script>alert('잘못된 접근입니다.'); location.href='../index.php'; </script>";
}
?>
