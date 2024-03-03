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
   <div class="header-2">
      <div class="flex" style="height: 68px; padding-right:20px;">
      <a href="home.php" class="logo" style="display: flex; flex-direction: row; align-items: center; font-size: 3rem; height:64px"><img src="images/logoo.png" alt="Furry Finds Logo">
         <span style="margin-left: -40px;">Furry Finds</span>
      </a>
      
         <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="shop.php">shop</a>
            <a href="contact.php">contact</a>
            <a href="orders.php">orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <?php if(isset($_SESSION['user_name']) && isset($_SESSION['user_email'])): ?>
               <p>Name : <span style="font-size: 2rem;"><?php echo $_SESSION['user_name']; ?></span></p>
               <p>Email : <span style="font-size: 2rem;"><?php echo $_SESSION['user_email']; ?></span></p>
               <a href="logout.php" class="delete-btn">Logout</a>
            <?php endif; ?>
         </div>
      </div>
   </div>

</header>
