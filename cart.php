<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> -->
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="Css/media.css">
  <style>
     .products {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }
  .product {
    border: 1px solid #ddd;
    padding: 10px;
    width: 200px;
    text-align: center;
  }
  .cart {
    margin-top: 30px;
    border: 1px solid #333;
    padding: 10px;
  }
  .cart-items {
    list-style-type: none;
    padding: 0;
  }
  .cart-items li {
    margin-bottom: 10px;
  }
  @media (max-width: 600px) {
    .products {
      flex-direction: column;
    }
    .product {
      width: 100%;
    }
  }
  button {
    background-color: #28a745;
    color: white;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
  }
  button:hover {
    background-color: #218838;
  }


  </style>
</head>
<body>

  <div id="header"></div> <!-- Placeholder for header -->

  <main>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">Your Cart</a>
        </div>
    </nav>

    <div class="container my-5">

        <div class="row g-4">



        <?php
        $ip=$_SERVER['REMOTE_ADDR'];
        $q=mysqli_query($conn,"select * from cart where session_id='$ip'");
        mysqli_num_rows($q);
    $tprice=0;
        while($arr=mysqli_fetch_array($q))
        {
          
          $pid=$arr['product_id'];
          $p=mysqli_query($conn,"select * from products where id='$pid'");
          $productarr=mysqli_fetch_array($p);
        //  $tprice=$productarr['price'];
         $tprice+=$productarr['price'];
          
        ?>
            <!-- Cart Item -->
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-2">
                            <img src="images/<?php echo $productarr['product_image'];?>" class="img-fluid rounded-start" alt="Product">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $productarr['product_name']?></h5>
                                <p class="card-text mb-1">Price: <?php echo $productarr['price'];?></p>
                                <div class="input-group w-50">
                                    <span class="input-group-text">Qty</span>
                                    <input type="number" class="form-control" value="1" min="1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-end pe-4">
                          <?php
                      //     echo   $product_id=$productarr['id'];
                      //     if(isset($_POST['remove']))
                      //     {
                           
                      //     mysqli_query($conn,"delete from cart where product_id='$pid'");  
                      // echo "<script>window.location='cart.php';</script>";
                      //     }
                          ?>
                          <form action="cartdel.php?id=<?php echo $pid;?>"  method="post">
                            <input type="submit" class="btn btn-success mt-3" name="remove" value="remove">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
        }
?>

        </div>

        <!-- Cart Summary -->
        <div class="row mt-5">
            <div class="col-md-6 offset-md-6">
                <div class="card p-4 shadow-sm">
                    <h4 class="mb-3">Cart Summary</h4>
                    <p class="mb-2">Subtotal: <strong><?php echo $tprice;?></strong></p>
                    <button onclick="window.location='checkout.php'" class="btn btn-success w-100 mt-3">Proceed to Checkout</button>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
   
</html>

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
    //   cart js

    let cart = [];

  function addToCart(productName, productPrice) {
    cart.push({ name: productName, price: productPrice });
    updateCart();
  }

  function updateCart() {
    const cartItems = document.getElementById('cartItems');
    const cartTotal = document.getElementById('cartTotal');

    cartItems.innerHTML = '';
    let total = 0;

    cart.forEach(item => {
      const li = document.createElement('li');
      li.textContent = `${item.name} - ₹${item.price}`;
      cartItems.appendChild(li);
      total += item.price;
    });

    cartTotal.textContent = total;
  }
      
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>
