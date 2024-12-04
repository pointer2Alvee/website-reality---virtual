<?php session_start(); ?>
<!doctype html>

<html lang="en">

<!--head Starts here-->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- Bootstrap Icon CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



  <!-- Developer CSS -->


  <link rel="stylesheet" href="02~css/Page_index.css">


  <?php include_once('header.php'); ?>


</head>
<!--head ends here-->





<!--body Starts here-->

<body>


  <!-- Know us section Starts here -->

  <div class="container-lg container-md container-sm w-100 h-100 bg-dark pb-3">
    <h3 class="text-center text-white pt-2 pb-2"><i class="bi  bi-info-circle-fill" style="color: rgb(221, 221, 221);"></i> KNOW US</h3>
    <div class="row">

      <div class="col-12 fs-3 pt-1 ">
        <h4 class="text-start text-white fs-5"> <i class="bi bi-question-diamond" style="color: rgb(0, 132, 255);"></i>
          What
          is REALITY-VIRTUAL ?</h4>
        <p class="  pb-5 fs-6 text-start-justified text-white">
          REALITY-VIRTUAL is one sort of your constant helping social media platform hand on whom you can rely, with no doubt, for any
          social support and related assistance. To be more precise, it is an online platform that connects people of vitual world in reality.
          <br> <br>
          Our ultimate vision is to build a safer and more communicable society full of enthusiastic researchers, culture and community.

        </p>
        <h4 class="text-start text-white fs-5"> <i class="bi bi-bullseye" style="color: rgb(241, 51, 3);"></i> Our
          Vision :
          A Tech-Advanced Bangladesh</h4>
        <p class="  pb-5 fs-6 text-start-justified text-white">
          REALITY-VIRTUAL is one sort of your constant helping social media platform hand on whom you can rely, with no doubt, for any
          social support and related assistance. To be more precise, it is an online platform that connects people of vitual world in reality.
          <br> <br>
          Our ultimate vision is to build a safer and more communicable society full of enthusiastic researchers, culture and community.
        </p>
        <h4 class="text-start text-white fs-5"> <i class="bi bi-people-fill" style="color: rgb(0, 255, 0);"></i>
          Talents
          Of RealityVirtual <label class="text-primary fs-6"> <a href="teamPage.php"> Learn more....</a></label> </h4>
        <p class="  pb-5 fs-6 text-start-justified text-white">
          REALITY-VIRTUAL is one sort of your constant helping social media platform hand on whom you can rely, with no doubt, for any
          social support and related assistance. To be more precise, it is an online platform that connects people of vitual world in reality.
          <br> <br>
          Our ultimate vision is to build a safer and more communicable society full of enthusiastic researchers, culture and community.
        </p>
      </div>
    </div>

  </div>
  <!-- Know us section ends here -->



  <!-- Modal LOGIN starts here -->
  <?php include_once('userLogin_modal.php'); ?>
  <!-- Modal LOGIN ends here -->

  <!--Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
<!--body ends here-->


<!--footer Starts here-->
<?php include_once('footer.php'); ?>
<!--footer ends here-->

</html>