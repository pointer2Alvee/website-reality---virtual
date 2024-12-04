 <?php
  //include 'db_connection.php';
  //$conn = OpenCon();
  //echo "Connected Successfully";
  //CloseCon($conn);
  //
  session_start();

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
   <!--link rel="stylesheet" href="02~css/achievements.css">

   <?php include_once('header.php'); ?>

 </head>
 <!--head ends here-->






   <!--body Starts here-->

 <body>

   <!-- friendlist starts-->
   <div class="friendlist mt-2 mb-5">
     <?php

      $uid = $_SESSION['userID'];

      $sql = "SELECT * FROM user WHERE user_id != $uid"; //

      $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

      $noOfRow = mysqli_num_rows($result);
      if ($noOfRow) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
         <div class="container-fluid">
           <div class="row justify-content-center">

             <div class="card mb-3" style="max-width: 640px;">
               <div class="row g-0">
                 <div class="col-md-4">
                   <?php if (!$row["profileImgUrl"]) {
                    ?>
                     <img src="06~Media_Images/profile/placeholder.png" class="img-fluid rounded-circle" alt="..." style="max-height:120px">
                   <?php } else {
                    ?>
                     <img src="<?php echo $row["profileImgUrl"] ?>" class="img-fluid rounded-circle" alt="..." style="max-height:125px">
                   <?php } ?>
                 </div>
                 <div class="col-md-8">
                   <div class="card-body">
                     <h5 class="card-title"><?php echo $row["first_name"], " ", $row["last_name"] ?></h5>
                     <p class="card-text d-flex justify-content-between align-items-center">
                       <small class="text-muted"><?php echo $row["street_address"] ?></small>
                       <small style="color:brown; margin-left:15px;">Rep:<?php echo $row["reputation"] ?></small>
                       <button class="btn btn-primary btn-sm float-right ms-5" style="color:white">
                         Add Friend
                       </button>
                     </p>
                   </div>
                 </div>
               </div>
             </div>
           <?php } //while loop ends
        } //if scope ends
        else {
            ?>
           <div class="alert alert-warning" role="alert" style="text-align:center">
             You have no friends yet!
           </div>
         <?php } //else cond. ends 
          ?>

           </div>
         </div>

   </div>

   <!-- friendlist ends-->







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