
<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Emergency Medical Help</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="style2.css" rel="stylesheet">
    </head>
    <body>
       <?php
        include 'includes/header.php';
        ?>

        <!--........................................................................top...................................................................--->
<div class="center">

    
  <img  src="dc.jpeg" alt="Emergency Medical Help">

</div>

<p  style="font-size: 30px">      There are lot of medical websites in the world but in India there is no such website for medical aid which provides these many services.

There are lot of foreign medical universities which run online services for medical aid.

There is different websites for blood related issue’s.

Different websites for consulting  a doctor.

Different website for buying medicine’s.

e.t.c
</p>
  <p  style="font-size: 30px">
    This is for public welfare. This project is made keeping in mind that every person in need should get proper support and assistance in form of a emergency medical help. Hence, we have prepared this website for helping the one in need and to provide proper facility and support in certain circumstances.
</p>



        <!--........................................................................footer...................................................................--->
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>