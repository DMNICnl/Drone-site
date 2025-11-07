<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway&display=swap">
 <link rel="stylesheet" href="css/header.css">
 
 
    <title>Document</title>
</head>
<body>
    

<div class="arrow">
<a href="#zero"> <img src="imgs/arrow.png" alt=""></a>
</div>


<section id="zero">
<div class="card">
<img class="logo" name="logo" src="imgs/logo.png" alt="DMNIC logo">

<h1 id="we">Welcome</h1>
<h2 id="wf">Searching for Spectacular Aerial Shots? Look No Further!</h2>
<h2 id="wf">Your'e on the right address.</h2>
</div>
<section> <!---parallax images --->
    <img src="imgs/1.png" id="img1" alt="">
    <img src="imgs/2.png" id="img2" alt="">
    <img src="imgs/3.png" id="img3" alt="">
    <img src="imgs/4.png" id="img4" alt="">
    <img src="imgs/5.png" id="img5" alt="">
    <img src="imgs/6.png" id="img6" alt="">
    <img src="imgs/7.png" id="img7" alt="">
    <img src="imgs/8.png" id="img8" alt="">
    <img src="imgs/9.png" id="img9" alt="">

</section>

<div class="menu">
  <ul class="list">
    <li class="li"><a href="#1st">About me</a></li>
    <li class="li"><a href="#2nd">My equipment</a></li>
    <li class="li"><a href="#3nd">Photos & videos</a></li>
    <li class="li"><a href="#4nd">Prices</a></li>
    <li class="li"><a href="#5nd">Shooting locations</a></li>
    <li class="li"><a href="#6nd">Contact</a></li>

  </ul>
</div>
<hr class="hr1">
</section>

<!--- <img class="bg" src="imgs/for2.jpg" alt=""> --->
<!---parallax images code --->
<script>
    let img1 = document.getElementById("imgs/1.png");
    let img2 = document.getElementById("imgs/2.png");
    let img3 = document.getElementById("imgs/3.png");
    let img4 = document.getElementById("imgs/4.png");
    let img5 = document.getElementById("imgs/5.png");
    let img6 = document.getElementById("imgs/6.png");
    let img7 = document.getElementById("imgs/7.png");
    let img8 = document.getElementById("imgs/8.png");
    let img9 = document.getElementById("imgs/9.png");
//    let btnHome = document.getElementById("arrow");

    window.addEventListener("scroll", function() {
        let value = window.scrollY;
        img1.style.left = value * -0.25 + "px";
        img2.style.top = value * -0.2 + "px";
        img3.style.left = value * -0.1 + "px";
        img4.style.left = value * 0.15 + "px";
        img5.style.left = value * 0.25 + "px";
        img6.style.top = value * 0.2 + "px";
        img7.style.left = value * 0.15 + "px";
        img8.style.left = value * 0.25 + "px";
        img9.style.top = value * 0.2 + "px";
      
    });
// website collapses when 

</script>


</body>
</html>