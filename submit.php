<?php 
$data_file = fopen("text.txt", "a+");
$name = $_POST["name"];
$aliveordead = $_POST["aliveordead"];
$text_to_write = $name . " " . $aliveordead;

fwrite($data_file, $text_to_write);
fclose($data_file);
?>
<!DOCTYPE html>
<html>
<head>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<title>High Craft Group</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
h2 {
  color: white;
  text-align: center;
  font-family: "Courier New", Times, serif;
  font-size: 50px;
}
p {
  color: white;
  text-align: center;
  font-family: "Courier New", Times, serif;
  padding:40px;
  padding-right:300px;
  padding-left:300px;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #000000;
  overflow: hidden;
  transition: .7s;
  padding-top: 60px;
  opacity: 1;
}

.sidenav a {
  padding: 8px 8px 20px 32px;
  text-decoration: none;
  font-size: 30px;
  font-family: "Courier New", Times, serif;
  font-weight: bold;
  color: #f59700;
  display: block;
  transition: .7s;
  opacity: 1;
}

.sidenav a:hover {
  color: #f1f1f1;
  opacity: 1;
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
  .sidenav a {font-size: 18px; opacity: 1;}
}
</style>
</head>
<body>
<a style="font-size:30px; cursor:pointer; position:fixed; top: 0; color: #f59700; font-family: Courier New, Times, serif; font-weight: bold;" onclick="openNav()">&#9776; Navigation</a>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.html" style="word-wrap: break-word;">Home</a>
  <a href="news.html" style="word-wrap: break-word;">News</a>
  <a href="contact.html" style="word-wrap: break-word;">Contact</a>
  <a href="season1.html" style="word-wrap: break-word;">Season 1</a>
  <a href="season2.html" style="word-wrap: break-word;">Season 2</a>
  <a href="terraria.html" style="word-wrap: break-word;">Terraria</a>
  <a href="serverstat.html" style="word-wrap: break-word;">Server Status</a>
  <a href="tasks.html" style="word-wrap: break-word;">Checklist</a>
  <a href="coords.html" style="word-wrap: break-word;">Coordinates</a>
  <a href="test.html" style="word-wrap: break-word;">Did you die?</a>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

  <h2>Form Submitted</h2>
  <p>Sorry that you died but look on the good side you can watch people and urge them towards murder!</p>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
