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
    <a>남자 운동 추천</a>
    <table>
      <tr>
        <td><a style="background:#B8D7FF">매트</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><a style="background:#B8D7FF">스텝박스</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><a style="background:#B8D7FF">바벨, 덤벨, 케틀벨</a></td>
      </tr>
      <tr>
        <td>
<pre>
-플랭크 어깨터치
-마운틴 클라이머
-사이드 크런치
-크런치
-암워킹
</pre>
        </td><td></td>
        <td>
<pre>
-니 업
-런지 업
</pre>
        </td><td></td>
        <td>
<pre>

-푸쉬업
-스쿼트
-데드리프트
-와이드 스쿼드
-런지
-스윙
-레터럴 레이즈 덤벨, 벤트 오버
-High Rotations

</pre>
        </td>
      </tr>
      <tr>
        <td>
          <details>
            <summary>초급 - 자세 교정 위주, 하체 전신운동 중심</summary>
<p><pre>
High Rotations 15회*3set
니 업 15회*3set
스쿼트 15회*3set
와이트 스쿼트 15회*3set
데드리프트 15회*3set
스윙 15회*3set
런지 15회*3set
레터럴 레이즈 덤벨, 벤트 오버 15회*3set
푸쉬업 15회*3set
암워킹 15회*3set
플랭크 어깨터치 15회*3set
마운틴 클라이머 15회*3set
</pre></p>
          </details>
        </td>
      </tr>
      <tr>
        <td>
          <details>
            <summary>중급 - 전신 하체중심</summary>
<p><pre>
High Rotations 20회*4set
니 업 20회*4set
런지 업 20회*4set
스쿼트 20회*4set
와이트 스쿼트 20회*4set
데드리프트 20회*4set
스윙 20회*4set
런지 20회*4set
레터럴 레이즈 덤벨, 벤트 오버 20회*4set
푸쉬업 20회*4set
사이드 크런치 20회*4set
플랭크 어깨터치 20회*4set
마운틴 클라이머 20회*4set
</pre></p>
          </details>
        </td>
      </tr>
      <tr>
        <td>
          <details>
            <summary>고급 - 저중량 고반복 위주, 전신 하체 중심</summary>
<p><pre>
High Rotations 30회*4set
니 업 30회*4set
런지 업 30회*4set
스쿼트 30회*4set
와이트 스쿼트 30회*4set
데드리프트 30회*4set
스윙 30회*4set
런지 30회*4set
레터럴 레이즈 덤벨, 벤트 오버 30회*4set
푸쉬업 30회*4set
사이드 크런치 30회*4set
플랭크 어깨터치 30회*4set
마운틴 클라이머 30회*4set
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