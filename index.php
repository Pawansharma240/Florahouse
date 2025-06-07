<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora House</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> -->
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/media.css">

</head>
<body>
<div id="header"></div> 
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/Fernseed_WebBanner.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption  ">
              <h3 class="label-text">We Provide Best Quality Plants</h3>
              <p class="label-text">Bring nature closer to your home with our vibrant collection of indoor and outdoor plants. </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/pexels-valeria-ushakova-603898-3094211.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h3 class="label-text">Love Towards The Nature</h3>
              <p class="label-text">Bringing Nature to Your Doorstep!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/pexels-h.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h3 class="label-text">Take a Fresh Breath</h3>
              <p class="label-text">Discover premium quality plants, seeds, and garden essentials. Grown with care, delivered with love.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="container-fluid outer-container ">
        <h2 class="text-success text-center mt-lg-3 mt-sm-2 pb-4">Shop By Categories</h2>
        </div>
        
    <div class="container-fluid shopbycategories">
     <div class="category-scroller">
      <div class="category">
        <a href="products.php?cata=best_seller" target="_blank">
        <div class="circle">
          <img src="Images/indoor-show-plant.jpeg" alt="" >
        </div>
      </a>
        <p>Best Seller</p>
      </div>
      <div class="category">
        <a href="products.php?cata=easy_to_care">
        <div class="circle">
          <img src="Images/easytocare.jpg" alt="">
        </div>
      </a>
        <p>Easy to care</p>
      </div>
      <div class="category">
        <a href="products.php?cata=xl_plant">
        <div class="circle">
          <img src="Images/jade-plant-in-hand-painted-pot-9764587pl-A_0.jpg" alt="">
        </div>
      </a>
        <p>XL plants</p>
      </div>
      <div class="category">
        <a href="products.php?cata=ceramic_pots">
        <div class="circle">
          <img src="Images/ceramic pots.jpg" alt="">
        </div>
      </a>
        <p>Ceramic Pots</p>
      </div>
      <div class="category">
        <a href="products.php?cata=vegetable_seeds">
        <div class="circle">
          <img src="Images/organic-vegtable-seeds-online-india.jpg" alt="">
        </div>
      </a>
        <p>Vegetable Seeds</p>
      </div>
      <div class="category">
        <a href="products.php?cata=fertilizers">
        <div class="circle"><img src="Images/fertilizer.jpg" alt="">
        </div>
      </a>
        <p>Fertilizers</p>
      </div>
    </div>
  </div>
  <section>
    <div class=" container-fluid offer">
      <img src="Images/PDP_Freebies_Strip_Banner.jpeg" alt="">
    </div>
  </section>
  <div class="container-fluid ">
    <div >
      <h2 class="text-success text-center mt-lg-3 mt-sm-2 pb-4">Best seller</h2>
    </div>
    <div class="Bestseller-container">

<?php
$q=mysqli_query($conn,"select * from products");
$a=0;
while($arr=mysqli_fetch_array($q))
{
$a++;
if($a<=5)
{
 $id=$arr[0];
?>
<div class="product">
        <img src="Images/<?php echo $arr['product_image'];?>" alt="Flamingo">
        <div class="nameofproduct">
          <a href="#">
            <h5 class="text-center text-success"><?php echo $arr['product_name'];?></h5>
            
          </a>
          <button onclick="window.location='viewproduct.php?id=<?php echo $id;?>'">View Product</button>
        </div>
      </div>

<?php
}
}
?>
      


    
    
      
    </div>
  </div>
 
<section>
  <div class="container-fluid mt-2 ">
    <p class="about-text text-center  ">
      At Flora House, we believe that a touch of green can transform any space into a lively, refreshing, and peaceful environment.
We are passionate about bringing nature closer to you with our curated collection of indoor and outdoor plants, seeds, and planters.
Whether you're a beginner or a seasoned plant lover, our mission is to make plant care easy, accessible, and joyful for everyone.
Join us in making homes greener, fresher, and happier — one plant at a time! 
    </p>
  </div>
</section>
<div id="footer"></div> 

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
<script>
   fetch('header.php')
      .then(response => response.text())  // Convert the response to text
      .then(data => document.getElementById('header').innerHTML = data); // Insert into the header div

    // Load the footer content from 'footer.html' into the <div> with id 'footer'
    fetch('footer.html')
      .then(response => response.text())  // Convert the response to text
      .then(data => document.getElementById('footer').innerHTML = data); // Insert into the footer div
      
</script>
</body>
</html>