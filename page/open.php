<?php 
	include "../db.php";
  if(isset($_SESSION['userid'])){
?>

<html>
<head><meta charset="UTF-8">
<title>시작하는 페이지</title>
<link rel="stylesheet" href="../css/commonn.css" type="text/css">
</head>
<body>
  <header>
    <a href="../page/open.php"><img src="home.jpg"></a>
    <h3>HOME</h3>
    <p align=right><?php echo $_SESSION['userid']; ?>님 환영합니다.
    <a href="../member/logout.php"><button>로그아웃</button></a>
    </p>
    <hr>
    <br>
  </header>
  <nav id="menubar">
    <ul>
      <li><a href="streaming.php">prologue</a></li>
      <li><a href="pt1.php">PT1</a></li>
      <li><a href="pt2.php">PT2</a></li>
      <li><a href="pt3.php">PT3</a></li>
      <li><a href="pt4.php">PT4</a></li>
      <li><a href="information.php">ABOUT</a></li>
    </ul>
  </nav><br>
  <section>
    <table>
      <tr>
        <th>칼로리는 현재 무게와 목표 체중, 건강상태를 고려하여 조절하는 것을 추천합니다.<br><br></th>
      </tr>
      <tr>
        <td><b>체중 조절용 탄단지 추천 비율</b><br></td>
      </tr>
      <tr>
        <td>탄수화물 30-50% | 단백질 20-35% | 지방 20-35%<br><br></td>
      </tr>
      <tr>
        <td><img src="food.jpg"></td>
      </tr>
    </table>
  </section>
</body>
</html>
  <?php 
        }else{
            echo "<script>alert('잘못된 접근입니다.'); location.href='../index.php'; </script>";
        } 
     ?>