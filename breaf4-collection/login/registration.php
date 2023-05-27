<?php
include "function.php";

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
$register = new Register();
$error = "";

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $avatar = $_POST['avatar'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];

  if(empty($name) || empty($email) || empty($password) || empty($confirmpassword) ||empty($avatar) || empty($contact) || empty($address)){
    $error = "All fields are required.";
  }
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error = "Invalid email format.";
  }
  elseif(strlen($password) < 6){
    $error = "Password must be at least 6 characters long.";
  }
  elseif($password !== $confirmpassword){
    $error = "Passwords do not match.";
  }
  else {
    $result = $register->registration($name, $email, $password, $confirmpassword, $contact, $avatar, $address);

    if($result == 1){
      // echo "<script> alert('Registration Successful'); </script>";
    }
    elseif($result == 10){
      $error = "Username or Email Has Already Taken";
    }
    elseif($result == 100){
      $error = "Password Does Not Match";
    }
  }
}

// rest of the code remains the same as before


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <script src="validation.js"></script>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <link href="css/style.css" rel="stylesheet" />
      <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body>
  <div class="hero_area">
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="../brief4shopingcard/index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="../brief4shopingcard/product.php">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="../brief4shopingcard/checkout.php">Checkout</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="../brief4shopingcard/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
    <h2 >Sigin Up</h2>
    <form name="registrationForm" action="" id="form1" method="post" autocomplete="off" >
    <?php if($error !== ""){ ?>
      <div style="color: red;" ><?php echo $error; ?></div>
    <?php } ?>
  <div>
    <label for="">Name : </label>
    <input type="text" name="name" id="fullname" >
    <?php if(isset($error) && strpos($error, "name") !== false){ ?>
      <p style="color: red;" id="error-name"><?php echo $error; ?></p>
    <?php } ?>
  </div>

  <div>
    <label for="">Email : </label>
    <input type="text" name="email" id="email" >
    <?php if(isset($error) && strpos($error, "email") !== false){ ?>
      <p style="color: red;" id="error-email"><?php echo $error; ?></p>
    <?php } ?>
  </div>
  <div>
    <label for="">Address : </label>
    <input type="text" name="address" id="address" >
    <?php if(isset($error) && strpos($error, "address") !== false){ ?>
      <p style="color: red;" id="error-address" ><?php echo $error; ?></p>
    <?php } ?>
  </div>
  <div>
    <label for="">mobile : </label>
    <input type="text" name="contact" id="mobile" >
    <?php if(isset($error) && strpos($error, "contact") !== false){ ?>
      <p style="color: red;" id="error-contact" ><?php echo $error; ?></p>
    <?php } ?>
  </div>
  <div>
    <label for="">Password : </label>
    <input type="password" id="password" name="password" >
    <?php if(isset($error) && strpos($error, "password") !== false){ ?>
      <p style="color: red;" id="error-password" ><?php echo $error; ?></p>
    <?php } ?>
  </div>
  <div>
    <label for="">Confirm Password : </label>
    <input type="password" name="confirmpassword" id="confpassword">
    <?php if(isset($error) && strpos($error, "confirmpassword") !== false){ ?>
      <p style="color: red;" id="error-match" ><?php echo $error; ?></p>
    <?php } ?>
  </div>
  <div>
    <label for="">Image : </label>
    <input type="file" name="avatar" id="image" >
    <?php if(isset($error) && strpos($error, "avatar") !== false){ ?>
      <p style="color: red;" id="error-image" ><?php echo $error; ?></p>
    <?php } ?>
  </div>
  <button type="submit" name="submit" id="but1">Register</button>
</form>

    <br> <br>
    <a href="login.php">Login</a>
    <script src="register.js"></script>
  </body>
</html>
<?php include "footer.php" ?>