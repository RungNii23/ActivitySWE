<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">

<header>

</header>
<body class="w3-theme-l5">

<nav class="w3-sidenav w3-theme-d5 w3-card-2 w3-animate-left" style="display:none" id="mySidenav">
  <a href="javascript:void(0)" 
  onclick="w3_close()"
  class="w3-panel w3-padding-large w3-closenav w3-large w3-right-align">ปิด &times;</a>
  <center><img src="<?php echo base_url();?>assets/img/Blackblue5.jpg" class="w3-round w3-center-align" alt="Norway" style="width:70%"></center><br>
  <ul class="w3-ul">
    <li class="w3-large"><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> หน้าหลัก</a></li>
    <li class="w3-large"><a href="#"><i class="fa fa-building" aria-hidden="true"></i> กิจกรรมทั้งหมด </a></li>

  </ul>
</nav>

<div id="main">

<header class="w3-container w3-theme-d4 ">
  <span class="w3-opennav w3-xxlarge w3-cell" onclick="w3_open()" >&#9776;</span>
  <h3 class="w3-cell w3-panel w3-padding-xlarge"> ระบบฐานข้อมูลกิจกรรมนักศึกษา หลักสูตรวิศวกรรมซอฟต์แวร์</h3>
  <form class="w3-cell">
    <input class="fa fa-search w3-center-align w3-theme" type="text" name="search" placeholder="ค้นหากิจกรรม" 
      style=" width:60%;
            font-size: 16px;
            padding: 8px 20px 8px 20px;
            box-sizing: border-box;
            border: 0px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            background-position: 10px 10px;">
  </form>
  <div>
    <p>
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-medium w3-cell w3-wide w3-display-topright w3-margin w3-round-large w3-theme-d1">
        <i class="fa fa-lock" aria-hidden="true"></i> 
        เข้าสู่ระบบ
      </button>
    </p>
  </div>

    <!-- LOGIN -->
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom w3-theme-d1" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="<?php echo base_url();?>assets/img/people.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>ชื่อผู้ใช้</b></label>
          <input class="w3-input w3-border w3-theme-l5 w3-round-large w3-margin-bottom" type="text" placeholder="ป้อนชื่อผู้ใช้" name="usrname" required>
          <label><b>รหัสผ่าน</b></label>
          <input class="w3-input w3-border w3-theme-l5 w3-round-large" type="password" placeholder="ป้อนรหัสผ่าน" name="psw" required>
          <a href="<?php echo base_url();?>welcome/loginAdmin"><button class="w3-btn-block w3-food-aspargus w3-section w3-padding w3-round-large" type="submit">เข้าสู่ระบบ</button></a>
        </div>
      </form>
      <div class="w3-container w3-padding-16 w3-theme-d5 ">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-right w3-red">ยกเลิก</button>
      </div>
    </div>
  </div>

  </header>

<!-- <img src="https://www.w3schools.com/img_car.jpg" alt="Car" style="width:100%"> -->

<!--เพิ่ม content ตรงนี้นะจ้ะ -->
<div class="row">
    <div class="content">
      <div class="w3-content w3-display-container" style="max-width:900px max-height:400px">
        <br>
        <img class="mySlides" src="<?php echo base_url();?>assets/img/5.jpg" style="width:100%">
        <img class="mySlides" src="<?php echo base_url();?>assets/img/2.jpg" style="width:100%">
        <img class="mySlides" src="<?php echo base_url();?>assets/img/3.jpg" style="width:100%">
        <img class="mySlides" src="<?php echo base_url();?>assets/img/4.jpg" style="width:100%">
        <div class="w3-center w3-section w3-xxlarge w3-text-white w3-display-middle" style="width:100%">
        <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
      <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
    </div>
</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "20%";
  document.getElementById("mySidenav").style.width = "20%";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidenav").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

<div class="row">
  <div class="content">

<div class="w3-container">
  <br><h2>กิจกรรมนักศึกษาทั้งหมด</h2>

  <table class="w3-table">
    <tr>
      <th><div class="w3-container">
  <div class="w3-card-4">
    <header class="w3-container w3-theme-d5">
      <h3>ค่ายเขียนโปรแกรม 2558</h3>
    </header>
    <div class="w3-container w3-white">
      <p>วันที่ 23 ก.พ. 2558</p>
      <hr>
      <img src="<?php echo base_url(); ?>assets/img/avatar-fat.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>ประเภทกิจกรรม : การศึกษา</p><br>
      <p></p><br>
    </div>
    <button class="w3-button w3-block w3-theme-d5 ">รายละเอียด...</button>
  </div>
</div></th>
      <th><div class="w3-container">

  <div class="w3-card-4">
    <header class="w3-container w3-theme-d5 ">
      <h3>อบรม scurm</h3>
    </header>
    <div class="w3-container w3-white">
      <p>1 new friend request</p>
      <hr>
      <img src="<?php echo base_url(); ?>assets/img/avatar-fat.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
    </div>
    <button class="w3-button w3-block w3-theme-d5">รายละเอียด...</button>
  </div>
</div></th>
    </tr>
    <tr>
      <td><div class="w3-container">

  <div class="w3-card-4">
    <header class="w3-container w3-theme-d5 ">
      <h3>อบรม python</h3>
    </header>
    <div class="w3-container w3-white">
      <p>1 new friend request</p>
      <hr>
      <img src="<?php echo base_url(); ?>assets/img/avatar-fat.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
    </div>
    <button class="w3-button w3-block w3-theme-d5 ">รายละเอียด...</button>
  </div>
</div></td>
      <td><div class="w3-container">

  <div class="w3-card-4">
    <header class="w3-container w3-theme-d5 ">
      <h3>ค่ายโปรแกรม 2559</h3>
    </header>
    <div class="w3-container w3-white">
      <p>1 new friend request</p>
      <hr>
      <img src="<?php echo base_url(); ?>assets/img/avatar-fat.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
    </div>
    <button class="w3-button w3-block w3-theme-d5 ">รายละเอียด...</button>
  </div>
</div></td>
    </tr>
    <tr>
      <td><div class="w3-container">


  <div class="w3-card-4"">
    <header class="w3-container w3-theme-d5 ">
      <h3>ค่ายสี่ชั้นปี 2555</h3>
    </header>
    <div class="w3-container w3-white">
      <p>1 new friend request</p>
      <hr>
      <img src="<?php echo base_url(); ?>assets/img/avatar-fat.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
    </div>
    <button class="w3-button w3-block w3-theme-d5 ">รายละเอียด...</button>
  </div>
</div></td>
      <td><div class="w3-container">


  <div class="w3-card-4">
    <header class="w3-container w3-theme-d5 ">
      <h3>ค่ายสี่ชั้นปี 2560</h3>
    </header>
    <div class="w3-container w3-white">
      <p>1 new friend request</p>
      <hr>
      <img src="<?php echo base_url(); ?>assets/img/avatar-fat.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
    </div>
    <button class="w3-button w3-block w3-theme-d5 ">รายละเอียด...</button>
  </div>
</div></td>
    </tr>
  </table>
</div>
    </div>
  </div>
</div>

    
  </div>
</div>

</body>
</html>
