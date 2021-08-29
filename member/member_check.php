<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title> 회원가입 </title>
<link rel="stylesheet" href="../css/commonn.css" type="text/css">
</head>
<body>
  <h1>회원가입 체크</h1>
<fieldset>
<form method="post" action="member_ok.php" name="memform">
<legend>체크사항</legend>
<table>
<tr>
<td>아이디: </td>
<td><input type="text" name="userid" value="<?=$_POST['userid']?>" readonly>
</td>
</tr>
<tr>
<td>비밀번호: </td>
<td><input type="password" name="userpw" value="<?=$_POST['userpw']?>" readonly></td>
</tr>
<tr>
<td>이름: </td>
<td><input type="text" name="name" value="<?=$_POST['name']?>" readonly>
</td>
</tr>
<tr>
<td>닉네임: </td>
<td><input type="text"name="nick" value="<?=$_POST['nick']?>" readonly>
</td>
</tr>
<tr>
<td>휴대폰: </td>
<td><input type="text"name="hp" value="<?=$_POST['hp1'].'-'.$_POST['hp2'].'-'.$_POST['hp3']?>" readonly>
</td>
</tr>
<tr>
<td>주소: </td>
<td><input type="text" name="adress"value="<?=$_POST['adress']?>" readonly></td>
</tr>
<tr>
<td>성별: </td>
<td><input type="text" name="sex" value="<?=$_POST['sex']?>" readonly>
</td>
</tr>
<tr>
<td>이메일: </td>
<td><input type="text" name="email"value="<?=$_POST['email'].'@'.$_POST['emadress']?>" readonly>
</td>
</tr>
</table>

<input type="submit" value="확인완료">
</form><form method=POST action="member.php" name="return">
<input type="submit" value="다시쓰기" name="return">

</form>
</fieldset>
  </body>
</html>
