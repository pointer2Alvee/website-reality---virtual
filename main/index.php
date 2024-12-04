 <?php
  //include 'db_connection.php';
  //$conn = OpenCon();
  //echo "Connected Successfully";
  //CloseCon($conn);
  //
  session_start();
  //session_destroy();
  ?>


 <!-- HERE STARTS ACTIVE PHP CODE -->

 <?php

  include 'DB_Connection.php';
  $objProductDetails = new ConnectionDetails();

  $conn = $objProductDetails->OpenConnection();
  // echo "Connected Successfully";

  ?>


 <?php


  if (isset($_SESSION['userName'])) {
    $logedUser_Type =  $_SESSION['userType'];
    //  echo $_SESSION['userType'];
  } else {
    $logedUser_Type =  "";
    // echo "no type";
  }

  //variables
  $Post_ID = array();
  $Post_Type = array();
  $Post_Title = array();
  $Post_Description = array();
  $Post_category = array();
  $Post_imageUrl = array();
  $Post_location = array();
  $Post_userID = array();
  // if (!isset($_SESSION['userLocation'])) {
  //   $User_location = $_SESSION['userLocation'];
  // } else {
  //   $User_location = "Dhanmondi";
  // }

  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field

  if (isset($_POST['userLocation'])) {
    $User_location = $_POST['userLocation'];
  } else {
    $User_location = "Global";;
  }

  // $User_location = $_POST['userLocation'];
  // if (empty($User_location)) {
  //   $User_location = "Global";
  //   echo "Loc is empty";
  // } else {
  //   //echo $User_location;
  //   $User_location = $_POST['userLocation'];
  // }
  //}

  // if (isset($_SESSION['user_Loc'])) {
  //   $User_location = $_POST['userLocation'];
  //   echo $User_location;
  // } else {
  //   $User_location = 'Gulshan';
  //   echo $User_location;
  // }

  $index = 0;

  if ($User_location == "Global") {
    $sql = "SELECT * FROM postdata  ";
  } else {
    $sql = "SELECT * FROM postdata WHERE location = '$User_location' ";
  }

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $Post_ID[$index] = $row["postDataId"];
      $Post_Type[$index] = $row["Type"];
      $Post_Title[$index] = $row["Title"];
      $Post_Description[$index] = $row["Description"];
      $Post_category[$index] = $row["category"];
      $Post_imageUrl[$index] = $row["postImgUrl"];
      $Post_location[$index] = $row["location"];
      $Post_userID[$index] = $row["user_id"];
      $Post_Time[$index] = $row["PostTime"];
      // echo $Product_Name;
      // echo "<tr><td>".$row["ProductID"]."</td><td>".$row["ProductName"]." ".$row["ProductCategory"]."</td></tr>";
      $index++;
    }
    echo "</table>";
  } else {
    //echo "0 results";
  }

  //post's user docs
  foreach ($Post_userID as $key => $value) {
    $sql = "SELECT * FROM user WHERE user_id = '$Post_userID[$key]'  ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      while ($row = $result->fetch_assoc()) {

        $user_lastName[$key] = $row["last_name"];
        $user_Type[$key] = $row["user_type"];
      }


      echo "</table>";
    } else {
      //echo "0 results";
    }
  }
  // //post's user docs
  // foreach ($Post_userID as $key => $value) {
  //   $sql = "SELECT * FROM user WHERE user_id = '$Post_userID[$key]'  ";
  //   $result = $conn->query($sql);

  //   if ($result->num_rows > 0) {

  //     while ($row = $result->fetch_assoc()) {

  //       $user_lastName[$key] = $row["last_name"];
  //       $user_Type[$key] = $row["user_type"];
  //     }


  //     echo "</table>";
  //   } else {
  //     //echo "0 results";
  //   }
  // }

  $objProductDetails->CloseConnection($conn);

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

   <?php include_once('header.php'); ?>

 </head>
 <!--head ends here-->






 <!--body Starts here-->

 <body>





   <!-- carousel ends here -->

   <div class=" container-lg container-md container-sm text-start pt-2 pb-2 text-light bg-dark bg-opacity-100">
     <h3> <i class="bi bi-globe2" style="color: #30ba8f"></i> WORLD PORTAL</h3>
   </div>

   <div class=" container-lg container-md container-sm ">
     <div class="   row">
       <div class="  col-12 ">
         <div class=" choose-plan  text-dark " style="background-color: #30ba8f">
           <!-- Nav tabs -->
           <ul class="nav nav-tabs bg-secondary bg-opacity-25 " role="tablist">
             <li class="nav-item  ">
               <a class="nav-link text-dark active " data-bs-toggle="tab" href="#basic"><b>NEWS</b></a>
             </li>
             <li class="nav-item ">
               <a class="nav-link text-dark " data-bs-toggle="tab" href="#standard"><b>QUESTS</b></a>
             </li>
           </ul>

           <form class="d-flex" method="POST" action="" action="<?php echo $_SERVER['PHP_SELF']; ?>">
             <select class="form-select  text-dark" aria-label="Default select example" name="userLocation" required>
               <option class="bg-dark text-white" selected><?php echo $User_location ?></option>
               <option value="Dhanmondi">Dhanmondi</option>
               <option value="Mirpur">Mirpur</option>
               <option value="Tejgaon">Tejgaon</option>
               <option value="Gulshan">Gulshan</option>
               <option value="Banani">Banani</option>
               <option value="Global">Global</option>
             </select>
             <button class="btn btn-outline-dark " style="color: #000000;" type="submit" name="user_Loc"><i class="bi bi-search"></i></button>
           </form>




           <!-- Tab panes-1 -->
           <div class="tab-content ">
             <div id="basic" class=" tab-pane active">

               <div class=" pt-1 pb-5 bg-light bg-opacity-100" id="ID_Section_PaidVideos" style="background-color:#000000">
                 <div class="row align-items-start ">

                   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="false">
                     <div class="carousel-inner">

                       <div class="carousel-item active">
                         <div class="row align-items-start p-2">

                           <div class="col-12 container-lg container-md container-sm ">

                             <?php //$itemFlag = 0;
                              //$keyFlag = 0;
                              foreach (array_reverse($Post_ID, true) as $Key => $value) {
                                if ($Post_Type[$Key] == "News") {
                                  //for ($index = 0; $index <= 7; $index++) { 
                              ?>
                                 <div class=" float-start mx-3 my-2 p-1 shadow bg-body rounded" style="max-width:15rem;">
                                   <a href="productDetails.php?status=productView&&userType=<?php echo $logedUser_Type; ?>&&id=<?php echo $Post_ID[$Key]; ?>">
                                     <img class="img-fluid img-thumbnail" style=" max-width: 255px; max-height: 200px;" src="<?php echo $Post_imageUrl[$Key]; ?>" class="card-img-top" alt="..."></a>
                                   <div class="card-body ">
                                     <p style="font-size:12px" class="card-text fw-bold text-start "><?php echo $Post_Title[$Key]; ?> <br><i class="text-danger bi bi-geo-alt-fill"><?php echo $Post_location[$Key]; ?></i> </p>


                                     <hr>
                                     <p style="font-size:13px" class=""><i class="text-primary bi bi-person-circle"></i>&nbsp;Post by: &nbsp;<?php echo $user_lastName[$Key]; ?>
                                       <br>
                                       <i class="bi bi-clock-fill"></i>&nbsp;<?php echo $Post_Time[$Key]; ?>
                                     </p>


                                     <!-- <form action="" method="$_POST">
                                       <?php


                                        // if (isset($_POST['post_likeReact'])) {
                                        ?>

                                         <button type="submit" class="btn text-light btn-lg mb-3 position-absolute bottom-0 end-0 mx-1" style="background-color: #393933;" name="post_likeReact"><i class="bi bi-hand-thumbs-up"></i></button>

                                       <?php
                                        //  unset($_POST['post_likeReact']);
                                        //  } else {
                                        ?>
                                         //<button type="submit" class="btn text-light btn-lg mb-3 position-absolute bottom-0 end-0 mx-1" style="background-color: #30ba8f;" name="post_unlikeReact"> <i class="bi bi-hand-thumbs-up-fill"></i></button>
                                       <?php //}

                                        ?>
                                     </form> -->
                                   </div>
                                 </div>

                             <?php
                                  //   $itemFlag++;
                                  // if ($itemFlag > 7) {
                                  //   // $keyFlag = $key;
                                  //   break;
                                  // }
                                }
                              } ?>


                           </div>

                         </div>

                       </div>

                       <!-- SLIDED NEXT CAROUSEL -->
                       <div class="carousel-item">
                         <div class="row align-items-start p-2 ">

                           <div class="col-12 container-lg container-md container-sm ">

                             <?php

                              foreach ($Post_ID as $Key => $value) {
                                if ($Post_Type[$Key] == "News") {
                                  //for ($index = 0; $index <= 7; $index++) { 
                              ?>
                                 <div class="float-start card m-2 p-2" style="max-width:17rem;">

                                   <a href="productDetails.php?status=productView&&userType=<?php echo $logedUser_Type; ?>&&id=<?php echo $Post_ID[$Key]; ?>">
                                     <img class="img-responsive" style=" max-width: 250px; max-height: 250px;" src="<?php echo $Post_imageUrl[$Key]; ?>" class="card-img-top" alt="..."></a>

                                   <div class="card-body">
                                     <p class="card-text text-center fs-6 lh-1"><?php echo $Post_Title[$Key]; ?></p>
                                     <hr>
                                     <br>
                                     <p class="fs-6"><?php echo $Post_Time[$Key]; ?></p>
                                     <form action="" method="$_POST">
                                       <!-- <form action="" method="$_POST">
                                       <?php


                                        // if (isset($_POST['post_likeReact'])) {
                                        ?>

                          <button type="submit" class="btn text-light btn-lg mb-3 position-absolute bottom-0 end-0 mx-1" style="background-color: #393933;" name="post_likeReact"><i class="bi bi-hand-thumbs-up"></i></button>

                                            <?php
                                            //  unset($_POST['post_likeReact']);
                                            //  } else {
                                            ?>
                                            //<button type="submit" class="btn text-light btn-lg mb-3 position-absolute bottom-0 end-0 mx-1" style="background-color: #30ba8f;" name="post_unlikeReact"> <i class="bi bi-hand-thumbs-up-fill"></i></button>
                                                <?php //}

                                                ?>
                                                </form> -->
                                     </form>
                                   </div>
                                 </div>

                             <?php
                                  // $itemFlag++;
                                  //// if ($itemFlag > 7) {
                                  //   break;
                                  // }
                                }
                              }
                              ?>



                           </div>
                         </div>

                       </div>






                     </div>

                     <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" <?php if ($itemFlag < 7) { ?>hidden<?php } ?>>
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" <?php if ($itemFlag < 7) { ?>hidden<?php } ?>>
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                     </button> -->
                   </div>



                 </div>

               </div>

             </div>
             <div id="standard" class=" tab-pane fade">



               <!-- FREE VIDEOS CAUROSEL -->
               <div class=" pt-2 pb-2 bg-white " id="ID_Section_PaidVideos">
                 <div class="row align-items-start ">

                   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-inner">

                       <div class="carousel-item active">
                         <div class="row align-items-start p-2">

                           <div class="col-12 container-lg container-md container-sm ">

                             <?php $itemFlag = 0;
                              foreach (array_reverse($Post_ID, true) as $Key => $value) {
                                if ($Post_Type[$Key] == "Quest") {
                                  //for ($index = 0; $index <= 7; $index++) { 
                              ?>
                                 <div class="float-start  shadow bg-body rounded  card m-2 p-2" style="max-width:15rem;">
                                   <?php if (($logedUser_Type == 2 && $logedUser_Type != 1) || $logedUser_Type == null) { // echo $logedUser_Type; 
                                    ?>
                                     <a href="productDetails.php?status=productView&&userType=<?php //echo $user_Type[$Key]; 
                                                                                              ?>&&id=<?php echo $Post_ID[$Key]; ?>"><img class="img-responsive" style=" max-width: 250px; max-height: 250px;" src="<?php echo $Post_imageUrl[$Key]; ?>" class="card-img-top" alt="..."></a>
                                   <?php } else if (($logedUser_Type == 1 && $logedUser_Type != 2) || $logedUser_Type == null) { // echo $logedUser_Type; 
                                    ?>
                                     <img class="img-responsive" style=" max-width: 250px; max-height: 250px;" src="<?php echo $Post_imageUrl[$Key]; ?>" class="card-img-top" alt="...">
                                   <?php } else echo $user_Type[$Key]; ?>
                                   <div class="card-body ">
                                     <p style="font-size:12px" class="card-text fw-bold text-start "><?php echo $Post_Title[$Key]; ?> <br><i class="text-danger bi bi-geo-alt-fill"><?php echo $Post_location[$Key]; ?></i> </p>


                                     <hr>
                                     <p style="font-size:13px" class=""><i class="text-primary bi bi-person-circle"></i>&nbsp;Post by: &nbsp;<?php echo $user_lastName[$Key]; ?>
                                       <br>
                                       <i class="bi bi-clock-fill"></i>&nbsp;<?php echo $Post_Time[$Key]; ?>
                                     </p>

                                     <form action="" method="$_POST">
                                       <!-- <form action="" method="$_POST">
                                       <?php


                                        // if (isset($_POST['post_likeReact'])) {
                                        ?>

                                         <button type="submit" class="btn text-light btn-lg mb-3 position-absolute bottom-0 end-0 mx-1" style="background-color: #393933;" name="post_likeReact"><i class="bi bi-hand-thumbs-up"></i></button>

                                       <?php
                                        //  unset($_POST['post_likeReact']);
                                        //  } else {
                                        ?>
                                         //<button type="submit" class="btn text-light btn-lg mb-3 position-absolute bottom-0 end-0 mx-1" style="background-color: #30ba8f;" name="post_unlikeReact"> <i class="bi bi-hand-thumbs-up-fill"></i></button>
                                       <?php //}

                                        ?>
                                     </form> -->
                                     </form>
                                   </div>
                                 </div>

                             <?php
                                  $itemFlag++;
                                  if ($itemFlag > 15) {
                                    break;
                                  }
                                }
                              } ?>




                           </div>

                         </div>

                       </div>









                     </div>
                     <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                     </button> -->
                   </div>



                 </div>

               </div>





             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- NEW POSTS UPDATE ENDS HERE -->

   </div>

   </div>


   <!-- Customer Reviews Starts  -->


   <!-- Rating Icons ends-->

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