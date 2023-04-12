<!DOCTYPE html>
<html>
  <head>
  <link href="image/111.ico" rel="shortcut icon" type="image/x-icon">
    <meta charset="utf-8">
    <title></title>
    <style>
 table{ border-collapse : collapse;
        margin-left:auto; 
        margin-right:auto; }  /*이중선 제거*/
 th,td{
      width: 400;
      height: 20px;
      border: 1px solid #000;
      
      vertical-align: top;	/* 위 */
      vertical-align: bottom;   /* 아래 */
      vertical-align: middle;   /* 가운데 */
    }
  </style>
  </head>
  <body>
    <img src="image/tabszombie.png" width="30%" alt="TabsZombie로고입니다 XD" />
    <h1><a href="index.php">TZ 블로그</a></h1>
    <style>
      a{
        text-decoration:none;
      }
      body {
       text-align: center;
        }
    </style>
    <?php 
    $notification = '환영합니다!';
    echo '<h3>[전체공지]📢 - '.$notification.'</h3>';
   $ip_address;
   $ip_address = $_SERVER["REMOTE_ADDR"];
   echo '<h4>현재 접속한 ip는 <mark>'.$ip_address.'</mark>입니다.^^<br></h4>';
  ?>
    <hr>
    <h2>
      <?php
      if(isset($_GET['id'])){
        echo $_GET['id'];
      } else {
        echo "\"환영합니다\"";
      }
      ?>
    </h2>
    <hr>
    <?php
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo "사이트에 방문하신걸 환영합니다! <br> 이 사이트는 TabsZombie의 프로그래밍 공부를위해 제작되었습니다!";
    }
     ?>
     <br>
<br>
<hr>
<button onclick="location.href='index.php'">HOME</button >
<button onclick="location.href='small_site/inquiry.php'">문의</button >
<button onclick="location.href='small_site/terms_of_use.php'">이용약관</button >
<button onclick="location.href='small_site/about.php'">ABOUT</button >
<button onclick="location.href='small_site/developer.php'">개발자</button >
<br>
<ol>
      <?php
        $list = scandir('./data');
        $i = 0;
        while($i < count($list)){
          if($list[$i] != '.') {
            if($list[$i] != '..') {
              $ii = $i - 1;
              echo "<table><tr><td>$ii</td><td><a href=\"index.php?id=$list[$i]\">$list[$i]</a></td></tr></table>\n";
            }
          }
          $i = $i + 1;
        }
      ?>
    </ol>
    <br>
    <?=date("Y-m-d")."<br/>";?>
  </body>
</html>