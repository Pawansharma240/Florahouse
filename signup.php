<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
 
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
  <?php
  
  extract($_POST);
  if(isset($_POST['submit']))
  {
    if($password==$cpassword){

    $check=mysqli_query($conn,"select * from signup where email='$email' or mobile='$mobile'");
    $row=mysqli_num_rows($check);
      if($row==0)
      {
        mysqli_query($conn,"insert into signup values('','$email','$mobile','$user','$password')");
        echo "<script>alert('Account Succesfully'); window.location='signin.php';</script>";


      }
      else
      {
        echo "<script>alert('Already register from this email');</script>";

      }


    }
    else{
      echo "<script>alert('Please confirm password');</script>";
    }
  }
  ?>    
      <main class="form-signin w-100 m-auto">
        <form method="post">
          
          <h1 class="h3 mb-3 fw-normal">Create Account</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="text" name="mobile" class="form-control" id="floatingInput" placeholder="+91 8888888888">
            <label for="floatingInput">Mobile number</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="user">
            <label for="floatingInput">User Name</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="createPassword" placeholder="Password" name="password" oninput="checkPasswordMatch()">

            <label for="floatingPassword">create password</label>
          </div>
          <div class="form-floating">
            <input type="password" name="cpassword" class="form-control" id="confirmPassword" placeholder="Password" oninput="checkPasswordMatch()">
            <label for="floatingPassword">Confirm password</label>
          </div>
          <div id="passwordError" class="text-danger mb-2" style="font-size: 0.9rem;"></div>


      
          
          <input type="submit" name="submit" class="btn btn-outline-success w-100 py-2" value="Sign Up">
          <br>
          <br>
          <a href="signin.php"  class="btn btn-outline-success w-100 py-2">Sign In</a>
      
        </form>
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
      
function checkPasswordMatch() {
  const createPass = document.getElementById("createPassword").value;
  const confirmPass = document.getElementById("confirmPassword").value;
  const errorDiv = document.getElementById("passwordError");

  if (confirmPass === "") {
    errorDiv.textContent = "";
  } else if (createPass !== confirmPass) {
    errorDiv.textContent = "Passwords do not match!";
  } else {
    errorDiv.textContent = "";
  }
}


  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>
