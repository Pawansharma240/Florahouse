<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Product</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> -->
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="Css/media.css">
</head>
<body>

  <div id="header"></div> <!-- Placeholder for header -->

  <main>

  <?php
  $id=$_GET['id'];
  $q=mysqli_query($conn,"select * from products where id='$id'");
$arr=mysqli_fetch_array($q);
  ?>

    <div class="container-fluid text-center outerpro">
        <div class="row align-items-start">
          <div class="col">
            <img src="Images/<?php echo $arr['product_image'];?>" alt="">
           
          </div>
          <div class="col">
            
            <!-- Product Section -->
<div class="product-container">
    <h2><?php echo $arr['product_name'];?></h2>
    <div class="rating">⭐ 4.9 (258 Reviews)</div>
  
    <div class="price">
      <span class="discounted-price">₹<?php echo $arr['price'];?></span>
    </div>
  
    
  
      
    </div>
  
    
  
    <div class="action-buttons">
      <button onclick="window.location='cartadd.php?sid=<?php echo $id;?>'" class="add-to-cart">Add to Cart</button>
      <!-- <button class="buy-now" onclick="window.location='checkout.php?'">Buy Now</button> -->
    </div>
  </div>
  
          </div>
         
        </div>
      </div>
      <div class="container-fluid">
        <h2 class="text-center text-success">About the Product</h2>
        <div class="container">
            <p>
            <?php echo $arr['product_des'];?>
            </p>

        </div>
      </div>
      <div class="container-fluid">
        <h2 class="text-center text-success">Why should this product purhase ?</h2>
        <div class="container">
            
                <p>  1. Light Requirements
                    Place your Money Plant Golden in bright, indirect light for optimal growth. During the day, remember to shield it from the harsh afternoon sun. However, in the morning and evening, you can place it directly in the soft sunlight to make it happier! Additionally, the Golden Money Plant can also do well in low light conditions. So, if you are unable to give it some place that receives bright, indirect sunlight, placing it in a slightly shaded area will also do the trick.</p>
                <p>2. Watering the Money Plant Golden
                    Maintain moderate soil moisture levels by watering the plant when the top inch of the soil feels dry. When watering, water thoroughly till it reaches the bottom of the pot and let all excess water drain out of the drainage holes to ensure that the soil isn’t waterlogged.</p>
                <p>3. Temperature and Humidity
                    Keep your Gold Money Plant in a warm and humid environment, ideally between 18-29°C. To maintain humidity levels, ensure that you are regularly misting your plant and keeping its leaves moist. If you are unable to do so, you can also place a humidifier nearby to simplify your tasks. Additionally, a simple tray of pebbles, filled with water can work well too!</p>
                <p>
                    4. Fertilizing Your Golden Money Plant
                Feed your Money Plant Golden with a balanced liquid fertilizer diluted to half-strength once a month during the growing season to promote healthy growth and vibrant foliage. A slow release natural fertilizer, much like Ugaoo’s Plant Food Fertilizer Sticks, can also do well as they release balanced levels of fertilizer into the soil every time you water it.
                </p>
                <p> 5. Pruning Leaves
                    Trim any yellow or damaged leaves to encourage new growth and maintain the plant's compact shape. Additionally, old leaves that are hindering the growth of the new ones can also be cut off to ensure continued growth of the plant overall.</p>
               
        </div>
      </div>
  </main>

  <div id="footer"></div> <!-- Placeholder for footer -->

  <script>
    // Load the header content from 'header.html' into the <div> with id 'header'
    fetch('header.php')
      .then(response => response.text())  // Convert the response to text
      .then(data => document.getElementById('header').innerHTML = data); // Insert into the header div

    // Load the footer content from 'footer.html' into the <div> with id 'footer'
    fetch('footer.html')
      .then(response => response.text())  // Convert the response to text
      .then(data => document.getElementById('footer').innerHTML = data); // Insert into the footer div
      
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>
