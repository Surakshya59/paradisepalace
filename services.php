<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>


<!DOCTYPE html>
<html>
<head>
  <title>Online Nursery</title>
  <link rel="stylesheet" type="text/css" href="services.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->
   <link rel="stylesheet" type="text/css" href="homecss.css">
</head>
<body>

  <?php include 'components/user_header.php'; ?>
  <header>
    <h1><b>Welcome to PARADISEPALACE!</b></h1>
  </header>

  <section class="services" style="margin-bottom:50px;">
    <h1 style="font-size:25px;">Our Services</h1>
    <p style="font-size:20px;">As an online plant nursery, we provide a range of services to make your plant
         shopping and care experience convenient and enjoyable. Our main service is plant delivery, 
         where we ensure that a wide variety of plants are safely delivered to your doorstep. Along with that, 
         we offer plant care tips and guidance from our team of experts to help you nurture your
          plants and keep them healthy. If you need assistance in selecting the right plants for your space,
           we can provide personalized recommendations based on your preferences and lighting conditions.
            Additionally, we offer landscaping consultation services to help you design or enhance your outdoor space.
             To complete your gardening experience, we have a selection of plant accessories such as 
             pots, planters, soil, and fertilizers. Our customer support team is always ready to assist you with any
              questions or concerns you may have. We strive to provide exceptional service and ensure 
        that you have a successful and enjoyable plant journey with us.</p>
  </section>




</body>

</html>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>