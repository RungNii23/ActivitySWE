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
  class="w3-panel w3-padding-large w3-closenav w3-large w3-right-align">Close &times;</a>
  <center><img src="<?php echo base_url();?>assets/img/Blackblue5.jpg" class="w3-round w3-center-align" alt="Norway" style="width:70%"></center><br>
  <ul class="w3-ul">
    <li class="w3-large"><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> หน้าหลัก</a></li>
    <li class="w3-large"><a href="<?php echo base_url();?>"><i class="fa fa-building" aria-hidden="true"></i> กิจกรรมทั้งหมด </a></li>
    <li class="w3-large"><a href="<?php echo site_url('controller_Insert/inserteacher');?>"><i class="fa fa-building" aria-hidden="true"></i> เพิ่มข้อมูลอาจารย์ </a></li>
    <li class="w3-large"><a href="<?php echo site_url('controller_Insert/inserstudent');?>"><i class="fa fa-building" aria-hidden="true"></i> เพิ่มข้อมูลนักศึกษา </a></li>

  </ul>
</nav>

<div id="main">

<header class="w3-container w3-theme-d4 ">
  <span class="w3-opennav w3-xxlarge w3-cell" onclick="w3_open()" >&#9776;</span>
  <h3 class="w3-cell w3-panel w3-padding-xlarge"> ระบบฐานข้อมูลกิจกรรมนศ. หลักสูตร SWE</h3>
  <form class="w3-cell">
    <input class="fa fa-search w3-center-align w3-theme" type="text" name="search" placeholder="Search.." 
      style=" width:60%;
            font-size: 16px;
            padding: 8px 20px 8px 20px;
            box-sizing: border-box;
            border: 0px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            background-position: 10px 10px;">
  </form>


    <!-- LOGIN -->
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom w3-theme-d1" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="<?php echo base_url('');?>assets/img/people.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
      
      <div class="w3-container w3-padding-16 w3-theme-d5 ">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>
    </div>
  </div>
  </header>

<!-- <img src="https://www.w3schools.com/img_car.jpg" alt="Car" style="width:100%"> -->
  <div class="row">
    <div class="content">
      <!-- Edit Here -->
    </div>
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
  
</body>
</html>
