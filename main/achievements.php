 <?php
  //include 'db_connection.php';
  //$conn = OpenCon();
  //echo "Connected Successfully";
  //CloseCon($conn);
  //
  session_start();
  ?>
 <?php
  if (!isset($_SESSION['userName'])) {
    header("location: loginToSeeProductDetails.php");
  } else {
    //  if ($userType != 2) {
    //  header("location: loginToSeeProductDetails.php");
    // }
    $currentLoggedInUser = "No User";
  }

  ?>



 <!-- HERE STARTS ACTIVE PHP CODE -->

 <?php

  include 'DB_Connection.php';
  $objProductDetails = new ConnectionDetails();

  $conn = $objProductDetails->OpenConnection();
  // echo "Connected Successfully";

  ?>




 <?php
  //variables

  //$objProductDetails->selectedProductID(2);

  ?>




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
   <link rel="stylesheet" href="02~css/achievements.css">

   <?php include_once('header.php'); ?>

 </head>
 <!--head ends here-->






 <!--body Starts here-->

 <body>
   <!--achievements accordion-->
   <div class="achievements container-fluid">
     <div class="row justify-content-center">
       <div class="col-md-6">
         <div class="accordion" id="accordionExample">

           <?php

            $uid = $_SESSION['userID'];

            $sql = "SELECT * FROM achievement WHERE user_id = $uid"; //

            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

            $noOfRow = mysqli_num_rows($result);

            if ($noOfRow) {
              while ($row = mysqli_fetch_assoc($result)) { ?>
               <div class="accordion-item">
                 <h2 class="accordion-header" id="headingOne">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo (string)$row["achievementId"] ?>" aria-expanded="false" aria-controls="collapse<?php echo (string)$row["achievementId"] ?>">
                     <?php echo $row["title"] ?>
                   </button>
                 </h2>
                 <div id="collapse<?php echo (string)$row["achievementId"] ?>" class="accordion-collapse collapse" aria-labelledby="headingOne">
                   <div class="accordion-body">
                     <strong>Congratulations!</strong> <?php echo $row["description"] ?>
                   </div>
                 </div>
               </div>
             <?php } //while loop ends
            } //if scope ends
            else {
              ?>
             <div class="accordion-item">
               <h2 class="accordion-header" id="headingOne">
                 <button class="accordion-button collapsed" style="color:#393939;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBlank" aria-expanded="false" aria-controls="collapseBlank">
                   No Achievement
                 </button>
               </h2>
               <div id="collapseBlank" class="accordion-collapse collapse" aria-labelledby="headingOne">
                 <div class="accordion-body">
                   <strong>WOW! No achievement to show. </strong> Don't worry. No achievement is also an achievement.
                 </div>
               </div>
             </div> <?php } //else condition ends
                    ?>
         </div>

       </div>
     </div>

   </div>
   <!--achievements class ends-->



   <!--achievements accordion ends here-->






   <!-- Modal LOGIN starts here -->
   <?php
    include_once('userLogin_modal.php');
    ?>
   <!-- Modal LOGIN ends here -->

   <!--Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

 </body>
 <!--body ends here-->



 <!--footer Starts here-->
 <?php include_once('footer.php'); ?>
 <!--footer ends here-->

 </html>