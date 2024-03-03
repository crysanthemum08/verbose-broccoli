<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex align-center justify-between">
         <a href="home.php" class="logo" style="font-size: 25px; margin-right: 40px; font-weight: bold; color: #2ecc71;"><img src="images/logoo.png" alt="">FurryFinds</a>
         <div class="search-form" style="flex: 1;">
            <form action="search.php" method="get" class="flex align-center">
               <input type="text" name="query" placeholder="Search products..." class="search-input" style="width: calc(100% - 40px); padding: 10px; #2ecc71; outline: none;">
               <button type="submit" class="search-button" style="background-color: #2ecc71; border: none; padding: 10px; width: 40px; height: 33px;"><i class="fas fa-search" style="color: white;"></i></button>
            </form>
         </div>
         <div class="login-links" style="font-size: 15px; margin-left: 30px;">
            <p><a href="login.php">Login</a>/<a href="register.php">Signup</a></p>
         </div>
         <div class="icons" style="margin-left: 10px;">
            <div id="menu-btn" class="fas fa-bars"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <div class="cart-container" style="display: flex; align-items: center;">
               <a href="cart.php" style="color: #2ecc71; font-size: 24px;"> <i class="fas fa-shopping-cart"></i> </a>
               <span style="font-size: 18px; margin-left: 5px; color: #2ecc71;"><?php echo $cart_rows_number; ?></span>
            </div>
         </div>
      </div>
   </div>

   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tool Kit with Hover Effect</title>
<style>
/* Styling for the toolkit */
.toolkit {
    display: none; /* Hide the toolkit content by default */
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 10px;
    z-index: 1;
}

.navbar a:hover + .toolkit,
.toolkit:hover {
    display: block; /* Display the toolkit content when hovered over the link or the toolkit itself */
}

/* Additional styling for links and toolkit */
.navbar a {
    position: relative;
}

.toolkit ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.toolkit li {
    padding: 5px 0;
}

.toolkit li a {
    text-decoration: none;
    color: #333;
}

</style>
</head>
<body>

<header>
   <div class="header-2">
      <div class="flex">
         <nav class="navbar">
            <a href="#" class="nav-link">Dog Food</a>
            <div class="toolkit">
               <ul>
                  <li><a href="product.php?type=wet_food">Wet food</a></li>
                  <li><a href="product.php?type=dry_food">Dry food</a></li>
                  <li><a href="product.php?type=milk">Milk</a></li>
               </ul>
            </div>
            <a href="#" class="nav-link">Dog Treats</a>
            <div class="toolkit">
               <ul>
                  <li><a href="product.php?type=dog_snacks">Dog Snacks</a></li>
                  <li><a href="product.php?type=dental_sticks">Dental Sticks</a></li>
                  <li><a href="product.php?type=training_treats">Training Treats</a></li>
               </ul>
            </div>
            <!-- Add more links and toolkits for other categories -->
         </nav>
         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>
</header>

<main>
<!-- Your main content here -->
</main>

<script>
// JavaScript for adding hover effect to toolkit
document.addEventListener("DOMContentLoaded", function() {
    var links = document.querySelectorAll('.navbar .nav-link');

    links.forEach(function(link) {
        link.addEventListener('mouseover', function() {
            // Show the toolkit when mouse is over the link
            this.nextElementSibling.style.display = 'block';
        });

        link.addEventListener('mouseleave', function() {
            // Hide the toolkit when mouse leaves the link
            this.nextElementSibling.style.display = 'none';
        });
    });
});
</script>

</body>
</html>
