<?php
include("connect.php");
?>
<?php
$plants = mysqli_query($conn,"select * from menu where main_menuname = 'plants'");
$seeds= mysqli_query($conn,"select * from menu where main_menuname = 'seeds'");
$pots= mysqli_query($conn,"select * from menu where main_menuname = 'Planters_and_pots'");
$plantcare= mysqli_query($conn,"select * from menu where main_menuname = 'Planters_and_pots'");
$gifting= mysqli_query($conn,"select * from menu where main_menuname = 'Planters_and_pots'");
?>
<nav class="navbar bg-body-tertiary navbar-expand-lg fixed-top navbarbg justify-content-end mb-">
    <div class="container">
      <div style="float: left;width: 105px;height:80px;">
<img src="images/Logo.png" style="width: 100%;cursor: pointer;" onclick="window.location.href = 'index.php'">
      </div>
     
      
   
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel sidebarcolor">
        <div class="offcanvas-header border-bottom-2">
          <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel ">Flora House</h5> -->
         
         <div  style="float: left;width: 105px;height:80px;" >
          <img   src="images/Logo.png" style="width: 100%;cursor: pointer;" onclick="window.location.href = 'index.php'" >
         </div>
          
          
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body  ">
          <ul class="navbar-nav justify-content-end align-items-centre fs-6 flex-grow-1 pe-3">
            <li class="nav-item dropdown ">
              <?php
              
              ?>
                <a class="nav-link text-success fs-5  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Plants
                </a>
                <ul class="dropdown-menu dropnav  border-0 shadow-none ">
                  <?php
                while($plantarr=mysqli_fetch_assoc($plants)){
                  $submenu = $plantarr['submenu'];
                  $id = $plantarr['sno'];
                  
                  echo "<li><a class='dropdown-item' href='products.php?sid=$id'>".$submenu."</a></li>";
                }
                  
                  ?>
                  <!-- <li><a class="dropdown-item" href="#">Outdoor Plants</a></li>
                  <li><a class="dropdown-item" href="#">Indoor Plants</a></li>
                 
                  <li><a class="dropdown-item" href="#">Low Maintenance Plants</a></li>
                  <li><a class="dropdown-item" href="#">Air Purifying Plants</a></li>
                  <li><a class="dropdown-item" href="#">Low Light Plants</a></li>
                  <li><a class="dropdown-item" href="#">Hanging Plants</a></li>
                  <li><a class="dropdown-item" href="#">Medicinal and Aromatic Plants</a></li>
                  <li><a class="dropdown-item" href="#">Pet Friendly Plants</a></li>
                  <li><a class="dropdown-item" href="#">Fruit Plants</a></li>
                  <li><a class="dropdown-item" href="#">Flowering Plants</a></li> -->
                </ul>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link text-success fs-5 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Seeds
                </a>
                <ul class="dropdown-menu dropnav border-0 shadow-none ">
                  <?php
                  while($seedsarr=mysqli_fetch_assoc($seeds)){
                    $submenu = $seedsarr['submenu'];
                    echo "<li><a class='dropdown-item' href='products.php?sid=$id'>".$submenu."</a></li>";
                  }
                  
                  ?>
                  <!-- <li><a class="dropdown-item" href="#">Flower Seeds</a></li>
                  <li><a class="dropdown-item" href="#">Vegitable Seeds</a></li>
                  
                  <li><a class="dropdown-item" href="#">Microgreen Seeds</a></li>
                  <li><a class="dropdown-item" href="#">Herb Seeds</a></li>
                  <li><a class="dropdown-item" href="#">Flower Bulbs</a></li>
                  <li><a class="dropdown-item" href="#">Fruit Seeds</a></li>
                  <li><a class="dropdown-item" href="#">Sees Kits</a></li> -->
                </ul>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link text-success fs-5 " href="products.php?sid=$id" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Planters and Pots
                </a>
                <ul class="dropdown-menu dropnav border-0 shadow-none ">
                  <?php
                   while($potsarr=mysqli_fetch_assoc($pots)){
                    $submenu = $potsarr['submenu'];
                    echo "<li><a class='dropdown-item' href='products.php?sid=$id'>".$submenu."</a></li>";
                  }
                  ?>
                  <!-- <li><a class="dropdown-item" href="#">Plastic Pots</a></li>
                  <li><a class="dropdown-item" href="#">Ceramic Pots</a></li>
                 
                  <li><a class="dropdown-item" href="#">Metal Planters</a></li>
                  <li><a class="dropdown-item" href="#">Wooder Planters</a></li>
                  <li><a class="dropdown-item" href="#">3D Printing Pots</a></li>
                  <li><a class="dropdown-item" href="#">Hanging Planters</a></li>
                  <li><a class="dropdown-item" href="#">Plant Stands</a></li>
                  <li><a class="dropdown-item" href="#">Seedling Tray</a></li>
                  <li><a class="dropdown-item" href="#">Basket Planter</a></li> -->
                </ul>
              </li>
            
              
              <li class="nav-item dropdown ">
                <a class="nav-link text-success fs-5 " href="products.php?sid=$id" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Plant Care
                </a>
                <ul class="dropdown-menu dropnav border-0 shadow-none ">
               <?php 
               
               
               while($plantcarearr=mysqli_fetch_assoc($plantcare)){
                $submenu = $plantcarearr['submenu'];
                echo "<li><a class='dropdown-item' href='products.php?sid=$id'>".$submenu."</a></li>";
              }
               
               ?>
                  <!-- <li><a class="dropdown-item" href="#">Potting Mix & Fertilizers</a></li>
                  <li><a class="dropdown-item" href="#">Garden Tools</a></li>
                 
                  <li><a class="dropdown-item" href="#">Watering Tools</a></li>
                  <li><a class="dropdown-item" href="#">Garden Decor & Accessories</a></li>
                  <li><a class="dropdown-item" href="#">Pest Controll</a></li> -->
                  
                </ul>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link text-success fs-5 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Gifting
                </a>
                <ul class="dropdown-menu dropnav border-0 shadow-none ">
                <?php 
               
               
               while($giftingarr=mysqli_fetch_assoc($gifting)){
                $submenu = $giftingarr['submenu'];
                echo "<li><a class='dropdown-item' href='products.php?sid=$id'>".$submenu."</a></li>";
              }
               
               ?>
                  <!-- <li><a class="dropdown-item" href="#">Women's Day Gift</a></li>
                  <li><a class="dropdown-item" href="#">Corporate Gifting</a></li>
                  
                  <li><a class="dropdown-item" href="#">Personilized Gifting</a></li>
                  <li><a class="dropdown-item" href="#">Gift Cards</a></li> -->
                 
                </ul>
              </li>

              <li class="nav-item dropdown ">
                <a class="nav-link text-success fs-5 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-regular fa-user" onclick="window.location='signin.php'"></i>
                </a>
                </li>
                <li class="nav-item dropdown ">
                  <a class="nav-link text-success fs-5 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-cart-shopping" onclick="window.location='cart.php'"></i>
                  </a>
                  </li>
          </ul>
          <form class="d-flex mt-1" role="search">
            <input class="form-control me-2 border-0 text-success fs-5 searchinput" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success  searchbtn " type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>