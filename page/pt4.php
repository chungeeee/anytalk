<?php
include "../db.php";
if(isset($_SESSION['userid'])){
?>

<html>
<head><meta charset="UTF-8">      
<title>PT4</title>
<link rel="stylesheet" href="../css/commonn.css" type="text/css">
</head>
<body>
<header>
  <a href="../page/open.php"><img src="home.jpg"></a>
  <h3>PT4</h3>
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
<section id="container">
	<span class="main_visual">&emsp;
<video controls loop>
			<source src="aa4.mp4" type="video/mp4"> 
Your browser does not support the video tag.			
</video>
</span>
&emsp; &emsp; &emsp;
<span id="container">
    <video autoplay="true" id="videoElement">
    
    </video>
</span>
<script>
var video = document.querySelector("#videoElement");
 
if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}
</script>
	</section>
</body>
</html>
<?php 
        }else{
            echo "<script>alert('잘못된 접근입니다.'); location.href='../index.php'; </script>";
        } 
     ?>