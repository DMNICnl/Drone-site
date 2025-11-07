<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="imgs/Dmniclogo.png" sizes="16x16">
    <title>Areal photographing</title>
</head>
<body>

<section id="EN">
<?php include'header.php'; ?>

<section id="1st">
<div class="container">

<h1 class="abm" data-aos="fadeInUp">About me</h1>
<hr class="hr2">
<h3 class="port" data-aos="fade-right">Hey there! I'm Nicolle, a 15-year-old car photographer and videographer from Holland. I love capturing stunning moments of cars and bringing them to life through my edits. Starting my own small business is a dream come true. Seeing the smiles on people's faces when I create something special for them is my ultimate goal. Every day, I'm learning and growing in this exciting field. I approach each project with professionalism, attention to detail, and a passion for delivering unique experiences. Age doesn't hold me back; it only fuels my determination. With the support of my loved ones, I'm ready to explore new horizons and make a lasting impact through my photography, videography and editing.</h3>

</div>
</section> 

<section id="2nd">
<div class="myeq">
<h1 class="EQ" data-aos="fade-up">My equipment</h1>


<hr id="hr3">
<div class="container-content" data-aos="fade-right">

<h3 >When it comes to the quality of my work, the DJI Mini 3 doesn't disappoint. It supports JPEG and DNG (RAW) formats, providing flexibility in post-processing. Additionally, the digital zoom feature allows me to get closer to the action, with zoom ratios of 2× for 4K footage, 3× for 2.7K, and 4× for FHD.</h3>
<h3>With my DJI Mini 3 by my side, I'm on a mission to capture awe-inspiring visuals that tell captivating stories. From vast landscapes to intricate details, I'm dedicated to showcasing the beauty of the world from a unique and exhilarating perspective.</h3>
</div>



<div class="slideshow" data-aos="fadeInUp">
        <img class="slide" src="imgs/DJI-mini-3.jpg" alt="Slide 1">
        <img class="slide" src="imgs/DJI-Mini-3-（RC-scaled.jpg" alt="Slide 2">
        <img class="slide" src="imgs/DJI-Mini-3-18-1536x864.png" alt="Slide 3">
      
      </div>
       <div class="controls">
          <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
          <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>
      
        <ul>

<div class="disc">
<h2 data-aos="fade-right">Disclaimer</h2>
<li data-aos="fade-down">Please note that i don't fly during storms, heavy rain, or in strong winds.</li>
<li data-aos="fade-down">I avoid areas with low-hanging trees or proximity to bodies of water.</li>
</ul>
</div>
</div>



<script>
        let slideIndex = 1;
        const slides = document.getElementsByClassName("slide");
        
        showSlide(slideIndex);
        
        function changeSlide(n) {
          showSlide(slideIndex += n);
        }
        
        function showSlide(n) {
          if (n > slides.length) {
            slideIndex = 1;
          } else if (n < 1) {
            slideIndex = slides.length;
          }
        
          for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
        
          slides[slideIndex - 1].style.display = "block";
        }
        
        </script>
</section>

<section id="3nd">
<div class="p&v">
<h1 class="fotosnvids" data-aos="fade-down">Gallerij</h1>
</div>
</section>

<section id="4nd">
<div class="price">
<h1 class="pric" data-aos="fade-up">Prices</h1>

<div class="prices">
<ul class="pc">
<h3 id="omsch1" data-aos="fade-right">I'm currently offering my photography and videography services for free, including filming and editing. While any financial support is appreciated, I am more focused on building my portfolio and sharing my passion with you. Before you judge too quickly, take a look at my gallery to see the quality and creativity I bring to each project. Your satisfaction is my priority, and I’m excited to create something special for you!
</h3>

</ul>

<h3></h3>

</div>
</div>
</section>


<section id="5nd">
<div class="locat">
<h1 class="loca" data-aos="fade-up">Shooting locations</h1>
<hr id="hr4">
<h3 class="shooting" data-aos="fade-down">When it comes to shooting locations, safety is paramount. While I'm open to trying out new things and exploring different settings, there are certain environments where I may not feel comfortable shooting. If you have a specific location in mind, please let me know in advance. I will assess the site and inform you before we start if it's suitable for filming. Your and others safety are my top priorities, and I aim to ensure a secure and enjoyable experience for everyone involved. Let's work together to find the perfect backdrop for your project!</h3>

</div>
</section>


<section id="6nd">
<div class="contact">
<h1 class="cont" data-aos="fade-up">Contact</h1>
<hr class="hr4">
<h3 class="info" data-aos="fade-right">When it comes to contacting me, you can reach me conveniently on WhatsApp through my provided number or email. All appointments, information, and inquiries regarding photo shoots, locations, prices, and music preferences for edits can be discussed through this platform. For your convenience, the finalized photos and videos will be sent to you via email to ensure optimal resolution. In case of larger files, I will utilize platforms like WeTransfer for seamless delivery. If you encounter any issues or require further assistance, we will promptly discuss and address them. If I am temporarily unavailable, alternative arrangements will be made to ensure smooth communication.</h3>
<h3 id="num" data-aos="fade-right">+31 649542593 <br> dmnicnl@gmail.com</h3>


</div>
</section>

<script src="script.js"></script>





<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</section>

</body>
</html>