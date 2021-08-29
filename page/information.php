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
    <table>
      <tr>
        <td><a style="background:#B8D7FF">추천 운동 루틴</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><a style="background:#B8D7FF">성북구 샐러드 맛집</a></td>
      </tr>
      <tr>
        <td>
          <ul>
            <li><a href="information_W.php">☞WOMAN</a></li><br>
            <li><a href="information_M.php">☞MAN</a></li>
          </ul>
        </td><td> </td>
        <td>
          <details>
            <summary>성북동 테이블<a href="https://map.naver.com/v5/search/%EC%84%B1%EB%B6%81%EB%8F%99%ED%85%8C%EC%9D%B4%EB%B8%94/place/350050120?placeSearchOption=fromNxList=true%26noredirect=1%26entry=pll&c=14134267.0936965,4522167.4674076,13,0,0,0,dh&placePath=%2Fhome%3Fentry=pll" target="blank">&nbsp;(☞지도)</a></summary>
            <p><pre>☎ 070-5220-4650
              매일 11:00-20:00 재료 소진 시 조기마감
              <b>추천메뉴</b>
              - 치즈 오믈렛 샐러드 12,000원
              - 새우 샐러드 12,000원
            </pre></p>
          </details>
          <details>
            <summary>살살솔트 앤 샐러드<a href="https://map.naver.com/v5/entry/place/1362242267?c=14134267.0936965,4522167.4674076,13,0,0,0,dh" target="blank">&nbsp;(☞지도)</a></summary>
            <p><pre>☎ 0507-1320-1804
              월-금 11:00-20:30 break time 15:00-17:00
              토-일 11:00-20:30 no break 재료 소진 시 마감
              <b>추천메뉴</b>
              - 살살 샐러드 9,000원
              - 살살 그릴드 샌드위치 10,000원
            </pre></p>
          </details>
          <details>
            <summary>Subway<a href="https://map.naver.com/v5/entry/place/35787583?c=14134267.0936965,4522167.4674076,13,0,0,0,dh" target="blank">&nbsp;(☞지도)</a></summary>
            <p><pre>☎ 02-744-4949
              매일 08:00-22:00
              <b>추천메뉴</b>
              - 로스트 치킨 샐러드 7,800원
              - 쉬림프 샌드위치 5,900원
            </pre></p>
          </details>
          <details>
            <summary>Salad On<a href="https://map.naver.com/v5/entry/place/1205144919?c=14134267.0936965,4522167.4674076,13,0,0,0,dh" target="blank">&nbsp;(☞지도)</a></summary>
            <p><pre>☎ 0507-1377-7707
              월-금, 일 10:30-20:30
              토요일 휴무
              <b>추천메뉴</b>
              - 그릴드 목살 보울 7,900원
              - 그릴드 목살 샐러드 6,200원
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