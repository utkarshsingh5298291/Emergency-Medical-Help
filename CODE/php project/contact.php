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
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <!--........................................................................top...................................................................--->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="row">
  <div class="column">
    <div class="card">
      <img src="img1.jpg" alt="Utkarsh" style="width:100%">
      <div class="container">
        <h2>Utkarsh Singh</h2>
        <p class="title">CEO &amp; Founder</p>
        <p>Jaypee University Of Engineering & Technology</p>
        <p>utkarshsingh5298291@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img2.jpg" alt="Utkarsh" style="width:100%">
      <div class="container">
        <h2>Utkarsh Raghuvanshi</h2>
        <p class="title">Art Director</p>
        <p>Jaypee University Of Engineering & Technology</p>
        <p>utkarshraghuvanshi@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img3.jpg" alt="Sudhanshu" style="width:100%">
      <div class="container">
        <h2>Sudhanshu Yadav</h2>
        <p class="title">Designer</p>
        <p>Jaypee University Of Engineering & Technology</p>
        <p>sudhanshu9696@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<div>
    <h3>Online doctor is a term that emerged during the 2000s, used by both the media [1] and academics, to describe a generation of physicians and health practitioners who deliver healthcare, including drug prescription, over the internet.</h3>
    <h3>An online pharmacy, Internet pharmacy, or mail-order pharmacy is a pharmacy that operates over the Internet and sends the orders to customers through the mail or shipping companies.

Online pharmacies might include:

Pharmacy benefit manager – A large administrator of corporate prescription drug plans
Legitimate Internet pharmacy in the same country as the person ordering.
Legitimate Internet pharmacy in a different country than the person ordering. This pharmacy usually is licensed by its home country and follows those regulations, not those of the international orders.
Illegal or unethical internet pharmacy. The web page for an illegal pharmacy may contain lies about its home country, procedures, or certifications. The "pharmacy" may send outdated (expired shelf life) or counterfeit medications and may not follow normal procedural safeguards.
</h3>

<h3>When you purchase medicines on EMH, you can be assured that you will get the medicines you order. EMH has the widest range of medicines online, sourced from our trusted network of pharmacies and medical stores.Unlike a regular medical store, EMH is powered by intelligent systems that remembers all the medicines you ordered online and makes sure they're always available whenever you need them. So, you'll always find your medicines on EMH's online pharmacy, anywhere in India*.</p>
</h3>
        <!--........................................................................footer...................................................................--->
       <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>