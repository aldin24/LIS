<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LOGIN</title>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
 <a href="add-books.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ADD BOOK</a>
<a href="register.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REGISTER</a>
   <a href="reserve.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">RESERVE A BOOK</a>
     <a href="login.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGIN</a>
    <a href="contact.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
  </div>
</div>
<div class="w3-content" style="max-width:2000px;margin-top:46px">
<header class="w3-container w3-grey">
  <h1>Library Information System</h1>
</header>
<h2>Login</h2><br>

<div class="w3-row">
<div class="w3-container w3-half">


<?php
echo "User Name:" . $_REQUEST['uname'] ."</br>";
echo "Password:".$_REQUEST['pass']."</br>";
?>



</div>


<div class="w3-container w3-half">
<img src="img/login.jpg" width="100%">
</div>
</div>








<script>
var myl061();


function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>





<!-- Footer -->
<footer class="w3-container w3-padding-15 w3-center w3-opacity w3-light-grey w3-xlarge">
    <p class="w3-medium">Powered by LIS</p>
</footer>
</div>
</body>
</html>
