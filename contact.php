<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<?php include "partials/header.php";
?>

<!-- header section ends -->

<section class="heading">
    <h3>contact us</h3>
    <p> <a href="home.php">home >></a> contact </p>
</section>

<section class="contact">

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>our number</h3>
            <p>+91 8597572261</p>
            <p>+91 8478075371</p>
            <p>+91 6291992322</p>
            <p>+91 9832805376</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>our email</h3>
            <p>chakrabortyprayas@gmail.com</p>
            <p>soumajitghosh22@gmail.com</p>
            <p>hulagang12@gmail.com</p>
            <p>najifaparvin420@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>Panskura Banamali College(Autonlous)<br>Purba Medinipur<br>Panskua RS <br> pin- 721152 </p>
        </div>

    </div>

    <div id="feedback" class="row">

        <form action="partials/_feedback.php" method="post">
            <h3>feedback</h3>
            <input type="text" name="name" placeholder="your name" class="box" required>
            <input type="number" name="phone" placeholder="your number" class="box" required>
            <input type="email" name="email" placeholder="your email" class="box" required>
            <textarea name="massage" placeholder="your message" id="" cols="30" rows="10" required></textarea>
            <input type="submit" value="Send Feedback" class="btn btn-dark">
        </form>

        <iframe class="map"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5292.710511798383!2d87.7374809421597!3d22.39678913471411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02bb26dcdef877%3A0x1dbbf3b8f70c294a!2sPanskura%20Banamali%20College%20(Autonomus)!5e0!3m2!1sen!2sin!4v1684946021684!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

</section>













<!-- footer section starts  -->

<section class="footer">

   

    <div class="credit"> Developed by <span>GigPil.Pvt</span> | all rights reserved!</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>