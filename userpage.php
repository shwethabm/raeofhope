<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  

<style>
 body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: crimson;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}
.sidenav a.active
    {
        background-color:cornsilk;
        color:crimson;
    }

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.heading{
    background-color: lightsalmon;
       text-align: center;
       height: 90px;
  }
  .h1{
    font-size: 45px;
    color: crimson;
    
  }
  .h2{
    font-size: 20px;
    position: relative;
     top: -8px;
 }
  #im{
    border-radius: 8px;
    margin-left: 80px;
    position: relative;
    top: 20px;
  }
  #box{
      width: 30%;
      background-color: crimson;
      height: 450px;
      margin-top: 0px;
      margin-left: 470px;
    box-shadow: 0 0 20px #000;
    }
    .user{
      font-size: 30px;
      
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="active">User profile</a>
  <a href="upload.php">Uploads</a>
  <a href="#">News</a>
  <a href="#">Contact</a>
</div>

<div class="heading">
<h class="h1">RAE OF HOPE</h>
<p class="h2">A step towards changing the world!</p></div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="card" id="box">
<div>
  <img src="dp.jpg" class="rounded-circle" id="im"> 
  </div>
<p class="user">Username</p>
</div> 
</body>
</html> 
