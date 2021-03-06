<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RUBY</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/special.css" rel="stylesheet">

   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
         <div class="container">
           <p>
             <a class="navbar-brand js-scroll-trigger" href="#" title="Cart-Not implemented"><i class="fa fa-2x fa-shopping-cart sr-icons"></i></a>
             <a class="navbar-brand js-scroll-trigger" href="wishlist.html" title="Wishlist"><i class="fa fa-2x fa-heart sr-icons"></i></a>
           </p>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger" href="index.html" title="Home">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger" href="index.html#about" title="About Us">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger" href="customized.html" title="Custom Design">Customized</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger" href="catalog.php" title="Catalog">Catalog</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger" href="index.html#stores" title="Find Store">Find Store</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link js-scroll-trigger" href="index.html#contact" title="Contact Us">Contact</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <section class="bg-white" id="product">
         <div class="row">
            <?php
               include ("connection.php");
               $sql = 'SELECT * FROM Jewels WHERE name="'. $_GET['name'] .'";';
               $result = $conn->query($sql);
               if (is_object($result)  && $result->num_rows > 0);
               $row = $result->fetch_assoc();

               echo '<div class="col-lg-6 col-md-8 bg-light text-center">
                 <div class="service-box mt-5 mx-auto">
                   <form onsubmit="return formFalse()">
                     <div class="container">
                         <h3 id="product_name">' .$row['name'] . ' ' . $row['type']. '</h3>
                         <h2 id="product_price">' .$row['price'] .' $</h2>
                         <p>Material: ' .$row['Material'] .'
                            <br>
                            Gemstone:' .$row['gemstone'] .'
                            <br>' .$row['Description'] . '
                         </p>
                         <label for="Own words">Write your own words:</label>
                         <input type="text" placeholder="up to 20 chars">
                         <p>
                           <a href="#" class="btn btn-primary" role="button" title="not implemented">Add to cart</a>
                           <button type="Add to cart" class="btn btn-primary" onclick="AddtoWishList()">SAVE TO WISHLIST</button>
                         </p>
                     </div>
                   </form>
                 </div>
               </div>
               <div class="col-lg-6 col-md-8 text-center border border-secondary">
                 <div class="service-box mt-5 mx-auto">
                   <img id="product_picture"  src="img/' .$row['picture'] .' ">
                 </div>
               </div>';
               ?>
         </div>
      </section>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
      <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
      <!-- Custom scripts for this template -->
      <script src="js/creative.min.js"></script>
      <script src="js/special.js"></script>
      <script src="js/wishlist.js"></script>
   </body>
</html>