<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />
<title>회원가입 폼</title>
<link rel="stylesheet" href="../css/commonn.css" type="text/css">
<script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
<script>
$(document).ready(function(e) { 
	$(".check").on("keyup", function(){ //check라는 클래스에 입력을 감지
		var self = $(this); 
		var userid; 
		
		if(self.attr("id") === "userid"){ 
			userid = self.val(); 
		} 
		
		$.post( //post방식으로 id_check.php에 입력한 userid값을 넘깁니다
			"id_check.php",
			{ userid : userid }, 
			function(data){ 
				if(data){ //만약 data값이 전송되면
					self.parent().parent().find("div").html(data); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
					self.parent().parent().find("div").css("color", "#F00"); //div 태그를 찾아 css효과로 빨간색을 설정합니다
				}
			}
		);
	});

});
function check_input()
{
	if(document.member.userpw.value !=document.member.userpd.value)
	{
		alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");
		document.member.userpw.focus();
		document.member.userpw.select();
		return;
	}
	document.member.submit();
}
</script>
</head>
<body>
	<form method="post" action="member_check.php" name="memform">
		<h1>회원가입 폼</h1>
			<fieldset>
				<legend>입력사항</legend>
					<table>
						<tr>
							<td>아이디</td>
							<td><input type="text" size="35" name="userid" id="userid" class="check" placeholder="아이디"  required />
							<td><div id="id_check">아이디가 실시간으로 검사됩니다.</div></td>
							</td>

						</tr>
						<tr>
							<td>비밀번호</td>
							<td><input type="password" size="35" name="userpw" placeholder="비밀번호" required><td>6~12자의 영문 소문자, 숫자와 특수기호만 사용할 수 있습니다.</td></td>
						</tr>
						<tr>    
							<td>비밀번호확인</td>							        <td><input type="password" size="35" name="userpd" placeholder="비밀번호확인" required></td>
						</tr>
						<tr>
							<td>이름</td>
							<td><input type="text" size="35" name="name" placeholder="이름" required></td>
						</tr>
						<tr>
						        <td>닉네임</td>
							<td><input type="text" size="35" name="nick" placeholder="닉네임" required></td>
						</tr>
						<tr>
							<td>휴대폰</td><td><select name="hp1">
<option value='010'>010</option>
<option value='011'>011</option>
<option value='016'>016</option>
<option value='017'>017</option>
<option value='018'>018</option>
<option value='019'>019</option></select>-<input type="text" maxlength="4"size="4" name="hp2">-<input type="text" maxlength="4" size="4" name="hp3">
							</td>
</tr><tr>
 							<td>주소</td>
							<td><input type="text" size="35" name="adress" placeholder="주소" required></td>
						</tr>
						<tr>
							<td>성별</td>
							<td>남<input type="radio" name="sex" value="남"> 여<input type="radio" name="sex" value="여"></td>
						</tr>
						<tr>
							<td>이메일</td>
							<td><input type="text" name="email" required>@<select name="emadress"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option>
							<option value="hanmail.com">hanmail.com</option><option value="google.com">google.com</option></select></td>
						</tr>
					</table>
				<input type="submit" value="가입하기" /><input type="reset" value="다시쓰기" />
</fieldset>
</form>
</body>
</html>
