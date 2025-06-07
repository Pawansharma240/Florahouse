<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> -->
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="Css/media.css">
  
  <style>
    .product{
        
        margin-top: 100px;
        gap: 20px;
        margin-right: 20px;
    }
    .mainclass{
        margin-top: 100px;
    }
    .namelink {
        text-decoration: none;
        color: black;
    }
    
    
  </style>
</head>
<body>

  <div id="header"></div> <!-- Placeholder for header -->

  <main class="container mainclass ">
    
<div class="container my-5 ">
<div class="row g-4">

<?php
include("connect.php");
error_reporting(0);
$id=$_GET['sid'];
if($id)
{
$product=mysqli_query($conn,"select * from products where catogory_id='$id'");
$menu=mysqli_query($conn,"select * from menu where sno='$id'");
$menu_arr=mysqli_fetch_array($menu);
$row=mysqli_num_rows($product);


echo '<h1>'.$menu_arr['submenu'].'</h1><br>';
?>
   
    <?php
    
    if($row!== 0){
    while($productarr=mysqli_fetch_array($product))
    {
    ?>
        <div class="col-6 col-lg-2">
            <div class="card h-100 text-center">
              <img src="Images/<?php echo $productarr['product_image'];?>" class="card-img-top" alt="Plant">
              <div class="card-body">
                <a href="viewproduct.php?id=<?php echo $productarr['id'];?>" class="namelink"><h5 class="card-title"><?php echo $productarr['product_name'];?></h5></a>
                
                <a href="cartadd.php?sid=<?php echo $productarr['id'];?>" class="btn btn-success">Add to Cart</a>
              </div>
            </div>
          </div>

<?php
    }
  }
    else{
      echo "<h1>No product</h1>";
    }

  }


  else
  {
$cata=$_GET['cata'];
    $shop_by_cat=mysqli_query($conn,"select * from products where shop_by_cata='$cata'");
    $menus=mysqli_query($conn,"select * from menu where sno='$id'");
    $menus_arr=mysqli_fetch_array($menus);
    $rows=mysqli_num_rows($shop_by_cat);
    while($productarr=mysqli_fetch_array($shop_by_cat))
    {
    ?>
        <div class="col-6 col-lg-2">
            <div class="card h-100 text-center">
              <img src="Images/<?php echo $productarr['product_image'];?>" class="card-img-top" alt="Plant">
              <div class="card-body">
                <a href="viewproduct.php?id=<?php echo $productarr['id'];?>" class="namelink"><h5 class="card-title"><?php echo $productarr['product_name'];?></h5></a>
                
                <a href="cartadd.php?sid=<?php echo $productarr['id'];?>" class="btn btn-success">Add to Cart</a>
              </div>
            </div>
          </div>

<?php
    }
  }


    // else{
    //   echo "<h1>No product</h1>";
    // }


?>
          </div>
      <!-- Product Card -->
      
  
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
