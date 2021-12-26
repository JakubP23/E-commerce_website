<?php
session_start();
include 'auth.php';
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owl Supplies</title>

    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <!--navigation section that is displayed on every page-->
    <nav class="nav-bar">
        <div class="nav">

            <div class="logo-image">
                <a href="homepage.php"><img src="images/logo.png" class="logo-image" alt=""></a>

            </div>

            <div class="nav-items">
                 <a href="customer-page.php"><img src="images/profile.png" alt=""></a>
                
                <?php $username=$_SESSION['user'];echo "<p> Hello: ".$username."</p>" ?>
                
                 <div class="cart">
                     <ul>
                         <li class="dropdown_header_cart">
                             <div class="shopping-cart">
                                <a style= "padding-right: 30px;" href="cart.php"><img src="images/cart.png" id = "cart_image" alt=""></a>
                             </div>
                         </li>
                     </ul>
                </div>
                <div class="logout">
                    <div class="login-btn">
                        <button class = "loginbtn" type="button" onclick="document.location='logout.php'">Logout</button>
                    </div>
                </div>
            </div>
       </div>
       <ul class="cat-list">
           
        <li class="cat-item"><a href="homepage.php" class="link" id = "home-item" >Home</a></li>
           <li class="cat-item"><a href="allProducts.php" class="link">All Products</a></li>
           <li class="cat-item"><a href="customer-page.php" class="link">My Account</a></li>
           <li class="cat-item"><a href="search_product.php" class="link">Search Products</a></li>
           

       </ul>
    </nav>

    <!-- Header Section with title start -->
    <header class="hero-section">
        <div class="content">
            <div class="image-container">
                <div class="text">OWL SUPPLIES </div>
              </div>
        </div>
    </header>  
    <!-- End of header section -->

    <!-- category section: allow customer to shop by specific categories -->
    <div class="cat-section">
        <h2 class="Category-title">Shop By Categories</h2>
        <section class="category-container">
            <a href="utilities.php" class="collection">
                <img src="images/writing-utensils.jpeg" alt="">
                <p class="collection-title"> Writing Utilities</p>
            </a>
            <a href="paper.php" class="collection">
                <img src="images/paper.jpeg" alt="">
                <p class="collection-title"> Paper</p>
            </a>
            <a href="arts-crafts.php" class="collection">
                <img src="images/arts-crafts.jpeg" alt="">
                <p class="collection-title"> Arts & Crafts</p>
            </a>    
        </section>
        <section class="category-container-two">
            <a href="organization.php" class="collection ">
                <img src="images/Organization.jpeg" alt="">
                <p class="collection-title"> Organization</p>
            </a>
            <a href="misc.php" class="collection">
                <img src="images/Misc.jpeg" alt="">
                <p class="collection-title"> Misc.</p>
            </a>
        </section>
    </div>
    <!-- End category section -->

    <!--Footer: End of page with link to Social Media-->
    <footer>
        <div class="footer-container">
                <a href="#"><img src="images/logo.png" class = "logo" alt="owl logo"></a>   
            <section class="social">
                <div class="social-container">
                    <ul>
                        <li><a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a></li>
                        <li><a href="#"><img src="https://img.icons8.com/color/48/000000/facebook-new.png"/></a></li>
                        <li><a href="#"><img src="https://img.icons8.com/color/48/000000/twitter--v1.png"/></a></li>
                    </ul>
                </div>
            </section>
        </div>
    </footer>
    <div class="footer-text">
        <!-- <img src="https://img.icons8.com/material-outlined/24/000000/creative-commons-all-rights-reserved.png"/> -->
        <p class="rights-reserved">&copy All rights reserved. Designed by Jakub Pecak, Ricky Wild</p>
    </div>
    <!-- End footer section -->
</body>
</html>