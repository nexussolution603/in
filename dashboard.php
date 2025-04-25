<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        body {
            background: url('your-background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>
    <p>This is your private dashboard.</p>
    <a href="view_users.php">View Registered Users</a> | 
    <a href="logout.php">Logout</a>
















 <!-- header section starts -->
 <header>
<input type="checkbox" name="" id="toggler">
  <label for="toggler" class="fas fa-bars"> </label>  


  <a href="#" class="logo">NeXuS<span> SoLuTiON</span></a>
 
      <nav class="navbar">
           <a href="#home">HOME</a>
           <a href="#about">ABOUT</a>
           <a href="#products">TASK</a>
           <a href="#contact">CONTACT</a>
      </nav>
     
     
 
     <div class="icons">
       <a href="#" class="fa fa-heart"></a>
       <a href="#" class="fa fa-shopping-cart"></a>
       <a href="#" class="fa fa-user"></a>
 
     </div>








 </header>
 
   <!-- header section ends -->









<!-- home section starts -->
<section class="home" id="home">

<div class="video-container">
  <video autoplay muted loop>
      <source src="background.mp4" type="video/mp4">
      
  </video>
</div>








    <div class="content">
    <h2>NeXuS <span>SoLuTi0N</span></h2>
       <SPAN2>SOLUTION PROVIDES </SPAN2>
          <p>"Get expert help for your business needs. As a trusted business assistant, I provide personalized support to help you achieve your goals. From organizing chats to running effective ads, I'm here to help you grow your business."</p>
          <a href="#products" class="btn">GET PRODUCTS</a>
          
     

</section>

<!-- home section ends -->














<!-- about section start -->


<section class="about" id="about">

<h1 class="heading"><span>ABOUT</span> US </h1>



     <div class="row">

       <div class="video-container">
          <video src="about video.mp4"loop autoplay muted></video>
           <h4><i>WEB DEVELOPMENT & ANY TASK</i></h4>
       </div>



       <div class="content">
       <h3>Why Choose Us?</h3>
        <p>Choose us for top-tier web development, seamless document management, and immersive game development. We craft high-performance websites, optimize workflow with smart document solutions, and create engaging gaming experiences. With innovation and expertise, we bring your ideas to life!</p>
<BR>  
          OUR SERVICES:
          <br>
          ✔ Custom website development tailored to client needs.  <br>
          ✔ Responsive and mobile-friendly web design.  <br>
          ✔ Secure payment gateway and e-commerce integration.  <br>
          ✔ Website performance optimization and SEO enhancement.  <br>
          ✔ Ongoing support, maintenance, and updates.</p>
         
       </div>


     </div>

</section>

<!-- about section ends -->

















<!-- icons section starts -->

<section class="icons-container">

  

  
  <div class="icons">
    <img src="free .png" alt="">
    <div class="info">
      <h3>Free Delivery</h3>
      <span>On All Orders</span>
    </div>
  </div>




  <div class="icons">
    <img src="return.png" alt="">
    <div class="info">
      <h3>2 Days Returns</h3>
      <span>Moneyback guarantee</span>
    </div>
  </div>






  <div class="icons">
    <img src="gift.png" alt="">
    <div class="info">
      <h3>Offer & Gift</h3>
      <span>On All Orders</span>
    </div>
  </div>







  <div class="icons">
    <img src="secure payment.png" alt="">
    <div class="info">
      <h3>Secure Payment</h3>
      <span>Protected By Easypaisa</span>
    </div>
  </div>





</section>

<!-- icons section ends -->





  





















<!-- products section starts -->

<section class="products" id="products">


  <h1 class="heading"> latest <span> Products</span> </h1>
  <div class="box-container">
  <div class="box">
   <span class="discount">-10%</span>
   <div class="image">
    <img src="web making.jpg" alt="">
    <div class="icons">
        <a href="mailto:nexussolution603@gmail.com?subject=WEB MAKING&body=Hi%20SIR,%20I%20WANTS%20TO%20MAKE%20A%20WEBSITE!"  class="fas fa-envelope" aria-hidden="true"></a>
        <a href="https://wa.me/+923169405908?text=HELLO%20SIR%20I%20WANTS%20TO%20MAKE%20A%20WEBSITE:%20https://example.com/product-url " target="_blank" rel="noopener noreferrer" class="cart-btn">ORDER NOW</a>
        <a href="https://wa.me/?text=Check%20out%20this%20WEB MAKING%20product%20at%20https://nexussolution603.github.io/com/" 
        target="_blank" rel="noopener noreferrer" class="fa fa-share" aria-hidden="true"></a>
    </div>

   </div>

  <div class="content">
     <h3> WEB MAKING</h3>
     <div class="price"> $40.99 <span>$50.99</span> </div>   

  </div>

  </div>







  <div class="box">
    <span class="discount">-60%</span>
    <div class="image">
     <img src="document.jpg" alt="">
     <div class="icons">
      <a href="mailto:nexussolution603@gmail.com?subject=DOCUMENT PROJECT&body=Hi%20SIR,%20I%20WANTS%20TO%20MAKE%20A%20DOCUMENT%20PROJECT!"  class="fas fa-envelope" aria-hidden="true"></a>
      <a href="https://wa.me/+923169405908?text=HELLO%20SIR%20I%20WANTS%20TO%20MAKE%20A%20DOCUMENT%20PROJECT:%20https://example.com/product-url " target="_blank" rel="noopener noreferrer" class="cart-btn">ORDER NOW</a>
      <a href="https://wa.me/?text=Check%20out%20this%20DOCUMENT%20PROJECT%20product%20at%20https://nexussolution603.github.io/com/" target="_blank" rel="noopener noreferrer" class="fa fa-share" aria-hidden="true"></a>
     </div>

    </div>

   <div class="content">
      <h3>TO MAKE DOCUMENTS FOR PROJECTS</h3>
      <div class="price"> $4.99 <span>$10.99</span> </div>   

   </div>

   </div>




   <div class="box">
    <span class="discount">-20%</span>
    <div class="image">
     <img src="hub.jpg" alt="">
     <div class="icons">
      <a href="mailto:nexussolution603@gmail.com?subject=GIT & HUB&body=Hi%20SIR,%20I%20WANTS%20TO%20GIT%20&%20HUB%20FOR%20MY%20PROJECT!"  class="fas fa-envelope" aria-hidden="true"></a>
      <a href="https://wa.me/+923169405908?text=HELLO%20SIR%20I%20WANTS%20TO%20GIT%20&%20HUB%20FOR%20MY%20PROJECT:%20https://example.com/product-url " target="_blank" rel="noopener noreferrer" class="cart-btn">ORDER NOW</a>
      <a href="https://wa.me/?text=Check%20out%20this%20GIT%20&%20%HUB20PROJECT%20product%20at%20https://nexussolution603.github.io/com/" target="_blank" rel="noopener noreferrer" class="fa fa-share" aria-hidden="true"></a>
     </div>

    </div>

   <div class="content">
      <h3>GIT & HUB </h3>
      <div class="price"> $40.99 <span>$60.99</span> </div>   

   </div>

   </div>






   <div class="box">
    <span class="discount">-10%</span>
    <div class="image">
     <img src="games.jpg" alt="">
     <div class="icons">
      <a href="mailto:nexussolution603@gmail.com?subject=BUYING & SELL GAMES ID&body=Hi%20SIR,%20I%20WANTS%20TO%20TAKE/GIVE%20A/YOU%20GAME%20ID!"  class="fas fa-envelope" aria-hidden="true"></a>
      <a href="https://wa.me/+923169405908?text=HELLO%20SIR%20I%20WANTS%20TO%20TAKE/GIVE%20A/YOU%20GAME%20ID:%20https://example.com/product-url " target="_blank" rel="noopener noreferrer" class="cart-btn">ORDER NOW</a>
      <a href="https://wa.me/?text=Check%20out%20this%20GAMES%20ID%20product%20at%20https://nexussolution603.github.io/com/" target="_blank" rel="noopener noreferrer" class="fa fa-share" aria-hidden="true"></a>
     </div>

    </div>

   <div class="content">
      <h3>SELLS & BUYING GAMES ID</h3>
      <div class="price"> $20.99 <span>$30.99</span> </div>   

   </div>

   </div>







   <div class="box">
    <span class="discount">-80%</span>
    <div class="image">
     <img src="daraz.jpg" alt="">
     <div class="icons">
      <a href="mailto:nexussolution603@gmail.com?subject=DARAZ COMPANY&body=Hi%20SIR,%20I%20HAVE%20TASK%20FOR%20YOU%20ABOUT%20OF%20DARAZ%20COMPANY!"  class="fas fa-envelope" aria-hidden="true"></a>
      <a href="https://wa.me/+923169405908?text=HELLO%20SIR%20I%20HAVE%20WORK%20FOR%20YOU%20ABOUT%20OF%20DARAZ%20COMPANY:%20https://example.com/product-url " target="_blank" rel="noopener noreferrer" class="cart-btn">ORDER NOW</a>
      <a href="https://wa.me/?text=Check%20out%20this%20SUPPLY%20DARAZ%20product%20at%20https://nexussolution603.github.io/com/" target="_blank" rel="noopener noreferrer" class="fa fa-share" aria-hidden="true"></a>
     </div>

    </div>

   <div class="content">
      <h3>SUPPLY PRODUCTS TO DARAZ COMPANY</h3>
      <div class="price"> $4.99 <span>$12.99</span> </div>   

   </div>

   </div>







   <div class="box">
    <span class="discount">-50%</span>
    <div class="image">
     <img src="design.jpg" alt="">
     <div class="icons">
      <a href="mailto:nexussolution603@gmail.com?subject=GRAPHICS DESIGNING&body=Hi%20SIR,%20I%20WANTS%20TO%20TALK%20ABOUT%20OF%20GRAPHICS%20DESIGNING!"  class="fas fa-envelope" aria-hidden="true"></a>
      <a href="https://wa.me/+923169405908?text=HELLO%20SIR%20I%20WANTS%20TO%20TALK%20ABOUT%20OF%20GRAPHICS%20DESIGNING:%20https://example.com/product-url " target="_blank" rel="noopener noreferrer" class="cart-btn">ORDER NOW</a>
      <a href="https://wa.me/?text=Check%20out%20this%20GRAPHICS%20DESIGNING%20product%20at%20https://nexussolution603.github.io/com/" target="_blank" rel="noopener noreferrer" class="fa fa-share" aria-hidden="true"></a>
     </div>

    </div>

   <div class="content">
      <h3>GRAPHICS DESIGNING</h3>
      <div class="price"> $5.99 <span>$10.99</span> </div>   

   </div>

   </div>




  </div>


</section>



<!-- products section ends -->
















<!-- contact section starts -->




<!-- WhatsApp Floating Button -->
<a href="https://wa.me/+923169405908?text=Hi%2C%20I%AM%20A%20Customer!" id="whatsapp-button" target="_blank">
  📱
</a>




<a href="https://wa.me/+923169405908?text=HI%2C%20I%20AM%20A%20CUTOMER AND I HAVE TASK FORYOU !" id="whatsapp-button" target="_blank">
  <img src="whatsapp.png" alt="WhatsApp" width="40" height="40">
</a>














<section class="contact" id="contact">

  <h1 class="heading"><span>Contact</span> Us</h1>
  <div class="row">
      <form action="https://api.web3forms.com/submit" method="POST">
        <input type="hidden" name="access_key" value="43f959f6-b52d-4bbd-aa77-6821fbd6306f">
          <input type="text" name="name" placeholder="YOUR NAME" class="box" required>
          <input type="email" name="email" placeholder="YOUR EMAIL" class="box" required>
          <input type=" number" name="number" placeholder="YOUR NUMBER" class="box" required>
          <textarea name="" class="box" placeholder="YOUR MESSAGE" id="" cols="30" rows="10" required></textarea>
          <input type="submit" value="Send Message" class="btn">
      </form>



      <div class="image">
        <img src=" "  alt="">
    </div>
        </div>
    
       </section>

<!-- contact section ends-->

















 <!-- footer section starts -->

 <section class="footer">
  <div class="box-container">
      <div class="box">
          <h3>QUICKS LINKS</h3>
          <a href="#home">HOME</a>
          <a href="#about">ABOUT</a>
          <a href="#products">PRODUCTS</a>
          <a href="#review">REVIEW</a>
          <a href="contact">CONTACT</a>
      </div>





      <div class="box">
          <h3> EXTRA LINKS</h3>
          <a href="#">TIKTOK</a>
          <a href="https://www.youtube.com/@nexussolution603">YOUTUBE</a>
          <a href="https://web.facebook.com/profile.php?id=61575111459760">FACEBOOK</a>
         
      </div>








      <div class="box">
          <h3>LOCATION</h3>
          <a href="https://g.co/kgs/r6zNMN9">PAKISTAN <BR> HAYATABAD/PESHAWAR <BR>INDUSTRIAL STATE</a>
         
      </div>




      <div class="box">
          <h3>DEAL WITH CONTACT</h3>
          <a href="https://wa.me/+923169405908?text=HI%2C%20I%20AM%20a%20CUTOMER AND I HAVE TASK FORYOU !">WHATSAPP</a>
          <a href="mailto:nexussolution603@gmail.com?subject=TO GOSSIP&body=Hi%20SIR,%20I%20AM%20A%20CUSTOMER!">NEXUSSOLUTION603@gmail.com</a>
          <a href="#"> </a>
          <img src="" alt="">
          <img src="" alt="">
      </div>
  </div>
  <div class="credit"> created by <span>NEXUS SOLUTION</span>| all rights reseved</div>
</section>

 <!-- footer section ends -->






</body>
</html>
  
</body>
</html>
