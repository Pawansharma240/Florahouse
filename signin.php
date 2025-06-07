
<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> -->
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="Css/media.css">
  <style>
    html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.signmain{
    margin-top: 150px;
    margin-bottom: 100px;
}
  </style>
</head>
<body>

  <div id="header"></div> <!-- Placeholder for header -->
 

  <main class="container align-items-center signmain">

          
      <main class="form-signin w-100 m-auto">


      <?php
// if ($_SERVER['REQUEST_METHOD'] =='POST'){
//   $email = $_POST['email'];
//   $password = $_POST['pass'];
//   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//   <strong>Your email and password successfully submitted</strong> You should check in on some of those fields below.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
  
// }

extract($_POST);
if(isset($_POST['submit']))
{
  
  $q=mysqli_query($conn,"select * from signup where email='$email' && password='$pass'");
  $row=mysqli_num_rows($q);
  $arr=mysqli_fetch_array($q);
  $user=$arr['user'];
  if($row!==0)
  {
    echo "<script>alert('Welcome ".$user."');</script>";
    $_SESSION['user']=$user;

  }
  else
  {
    echo "<script>alert('No account found - please register');</script>";

  }
}
?>
<?php
if(isset($_SESSION['user']))
{
  $session_user=$_SESSION['user'];

}
if(isset($session_user))
{
  echo "<h1> Welcome ".$session_user."</h1>";
  echo "<a href='logout.php'>Log Out</a>";
}
else
{

?>
        <form  method="post">
          
          <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
            <label class="form-check-label" for="checkDefault">
              Remember me
            </label>
          </div>
          <input type="submit" class="btn btn-outline-success w-100 py-2" value="Sign in" name="submit">
          <!-- <button class="btn btn-outline-success w-100 py-2" type="submit">Sign in</button> -->
      <a href="signup.php" class="btn btn-outline-success w-100 py-2 mt-2">Register for new Account</a>
        </form>
     
<?php
}
?>
 </main>
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
