<?php
include 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
    <nav class="nav-bar">
        <div class="nav">

            <div class="logo-image">
                <a href="homepage.php"><img src="images/logo.png" class="logo-image" alt=""></a>

            </div>

            <div class="nav-items">
                
                <a href="#"><img src="images/profile.png" alt=""></a>

                 <div class="cart">
                     <ul>
                         <li class="dropdown_header_cart">
                             <div class="shopping-cart">
                                <a href="cart.php"><img src="images/cart.png" id = "cart_image" alt=""></a>
                             </div>
                         </li>
                     </ul>
                </div>
                <div class="logout">
                    <div class="login-btn">
                        <button class = "logoutbtn" type="button" onclick="document.location='logout.php'">Logout</button>
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

    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/placeh.png" " alt="product" class="img-fluid">
                    <div class="form-row pt-4 font-size-16 font-baloo">
                        
                        
                        


            
            
            
                        <div class="col">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="productID" value="<?php echo $_POST['productID']; ?>">
                                <label for="quantity">quantity:</label>
                                <input type="number" id="cost" name="quantity" min="0" max= <?php echo $_POST['stock'] ?>>
                                <input type="submit" class="btn btn-warning form-control" value="Add to Cart" >
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 py-5">
                    <h5 class="font-baloo font-size-20"><?php echo $_POST['name']; ?></h5>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          
                    </div>
                    <hr class="m-0">

                    <!---    product price       -->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>Price:</td>
                                <td class="font-size-20 text-danger"><span> <?php echo $_POST['cost']; ?> </span></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Stock:</td>
                                <td class="font-size-20 text-danger"><span> <?php echo $_POST['stock']; ?> </span></td>
                            </tr>
                            
                            
                        </table>
                    <!---    !product price       -->
                        <hr>

                        <div class="col-12">
                    <h6 class="font-rubik">Product Description</h6>
                    <hr>
                    <p class="font-rale font-size-14"><?php echo $_POST['desc_path']; ?> </p>
                </div>

                     <div class="row">
                           <!-- product qty section -->  
                             <!-- <div class="qty d-flex">
                                 <h6 class="font-baloo">Qty</h6>
                                 <div class="px-4 d-flex font-rale">
                                     <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                     <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                     <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                 </div>
                             </div> -->
                            <!-- !product qty section -->  
                         </div>
                     </div>
                     
                </div>

                
            </div>
        </div>
    </section>
<!--   !product  -->

    


<div class="footer">
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
</div>
</body>
</html>