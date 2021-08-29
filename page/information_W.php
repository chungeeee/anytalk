<?php
include "../db.php";
if(isset($_SESSION['userid'])){
?>

<html>
<head><meta charset="UTF-8">      
<title>info</title>
<link rel="stylesheet" href="../css/commonn.css" type="text/css">
</head>
<body>
<header>
  <a href="../page/open.php"><img src="home.jpg"></a>
  <h3>INFO</h3>
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
    </ul><br>
  </nav>
  <section>
    <a>여자 운동 추천</a>
    <table>
      <tr>
        <td><a style="background:#B8D7FF">매트</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><a style="background:#B8D7FF">스텝박스</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><a style="background:#B8D7FF">바벨, 덤벨, 케틀벨</a></td>
      </tr>
      <tr>
        <td>
<pre>

-싯업
-플랭크
-사이드 크런치
-High Rotations
-Kneeling Hip Flexor Stretch
-Toe Touchess
-암워킹
-spider elbow plank
-superman
-superman reach out
-superman hold

</pre>
        </td><td></td>
        <td>
<pre>
-스템 워킹
-니 업
-런지 업
</pre>
        </td><td></td>
        <td>
<pre>
-스쿼트
-데드리프트
-와이드 스쿼드
-런지
-스윙
</pre>
        </td>
      </tr>
      <tr>
        <td>
          <details>
            <summary>초급 - 자세 교정 위주, 전신 등운동 중심</summary>
<p><pre>
High Rotations 10회*3set
스텝 워킹 10회*3set
니 업 10회*3set
스쿼트 10회*3set
데드리프트 10회*3set
superman 10회*3set
superman reach out 10회*3set
superman hold 10회*3set
싯업 10회*3set
플랭크 10회*3set
크런치 10회*3set
</pre></p>
          </details>
        </td>
      </tr>
      <tr>
        <td>
          <details>
            <summary>중급 - 전신 하체중심</summary>
<p><pre>
High Rotations 15회 *3set
니 업 15회*3set
런지 업 15회*3set
spider elbow plank 15회 *3set
스쿼트 15회 *3set
와이트 스쿼트 15회 *3set
데드리프트 15회 *3set
런지 15회 *3set
사이드 크런치 15회 *3set
암워킹 15회 *3set
싯업 15회 *3set
플랭크 15회 *3set
</pre></p>
          </details>
        </td>
      </tr>
      <tr>
        <td>
          <details>
            <summary>고급 - 저중량 고반복 위주, 전신 하체 중심</summary>
<p><pre>
High Rotations 20회 *4set
니 업 20회 *4set
런지 업 20회 *4set
spider elbow plank 20회 *4set
스쿼트 20회 *4set
와이트 스쿼트 20회 *4set
데드리프트 20회 *4set
런지 20회 *4set
사이드 크런치 20회 *4set
암워킹 20회 *4set
싯업 20회 *4set
플랭크 20회 *4set
</pre></p>
          </details>
        </td>
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