 <?php
  session_start();
  
  /* "호스트 주소","아이디","비밀번호","DB이름"*/
  $db = new mysqli("localhost","root","","test");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>