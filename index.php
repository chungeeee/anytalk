<?php include "db.php"; 


?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8" />
  <title>게시판 로그인</title>
<link rel="stylesheet" type="text/css" href="css/commonn.css" />

</head>
<body>
<img src="home.jpg">
<hr>
<br><br><br><br><br><br><br><br><br><br>

  <div id="login_box">
    <center>LOGIN</center>
        <div style="height:20px;"></div>
          <center><form method="post" action="member/login_ok.php">
            <table align="center" border="0" cellspacing="0" width="300">
                  <tr>
                      <td width="130" colspan="1"> 
                        <input type="text" name="userid" class="inph">
                    </td>
                    <td rowspan="2" align="center" width="100" > 
                        <button type="submit" id="btn" >로그인</button>
                    </td>
                </tr>
                <tr>
                    <td width="130" colspan="1"> 
                      <input type="password" name="userpw" class="inph">
                  </td>
              </tr></center>
    <tr>
                  <td colspan="2" align="right" class="mem"> 
                    <a href="member/member.php">회원가입</a>
               </td>
            </tr>
        </table>
      </form>
    </div>
  </body>
</html>
