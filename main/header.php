 <?php
  //session_start();

  if (isset($_SESSION['userName'])) {
    $currentLoggedInUser = $_SESSION['userName'];
  } else {
    $currentLoggedInUser = "No User";
  }


  //  UserLogout
  if (isset($_GET['logoutuser'])) {
    if ($_GET['logoutuser'] = 'logout') {
      unset($_SESSION['userID']);
      unset($_SESSION['userEmail']);
      unset($_SESSION['userName']);
      unset($_SESSION['userPassword']);
      unset($_SESSION['cart']);


      header('location:index.php');
    }
    header('location:index.php');
  }

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
   <title>RealityVirtual</title>

   <link rel="stylesheet" href="02~css/Page_index.css">



   <!-- RealityVirtual heading image -->
   <div class="  p-1 container-fluid sticky-top  text-dark bg-opacity-100 " style="background-color: #30ba8f;" id="">




     <div class=" fs-3 position-absolute top-0 end-0 ps-3 pe-3  pt-2">

       <div class="col-12">
         <a href=""><i class="bi bi-facebook ps-2 pe-1 " style="color: rgb(3, 126, 241);"></i></a>
         <a href=""> <i class="bi bi-instagram ps-1 pe-1  " style="color: rgb(241, 130, 3);"></i></a>
         <a href=""> <i class="bi bi-youtube ps-1 pe-2 " style="color: rgb(255, 0, 0);"></i></a>
       </div>
     </div>


     <!--nav bar -->

     <div class="col-12">

       <!--Navigation Tab Starts here-->




       <nav class="navbar navbar-expand-lg navbar-light bg-dark pb-1 pt-1 ">
         <div class="col-1">


           <div class="col-1 ps-3">
             <a href="index.php "><img style="max-width: 315px; max-height: 315px" src="06~Media_Images/Reality&VirtualLogo1.png" alt="imageNotFound"></a>
           </div>
           <!-- <div class="col-11">
                <h1 class="text-white fs-3 py-1">REALITY-VIRTUAL</h1>
             < /div> -->


         </div>
         <div class=" container-lg container-md container-sm ">

           <!-- Nav toggle drawer button -->
           <button class="navbar-toggler mb-2 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>


           <div class="collapse navbar-collapse " id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">




               <li class="nav-item">
                 <a class="nav-link border border-white rounded-1 p-2 me-1 bg-dark bg-opacity-75 " style="color: #30ba8f;" href="index.php">R</a>
               </li>

               <li class="nav-item">
                 <a class="nav-link  border border-white rounded-1 p-2 me-1 bg-dark bg-opacity-75 " style="color: #30ba8f;" href="index.php">V</a>
               </li>

               <!-- <li class="nav-item">
                 <form class="d-flex">
                   <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn-outline-light " style="color: #30ba8f;" type="submit"><i class="bi bi-search"></i></button>
                 </form>
               </li> -->

             </ul>


             <div class="navbar-nav  navbar-expand-lg navbar-expand-md navbar-expand-sm  me-3 ">
               <ul class="navbar-nav me-auto ">
                 <li class="nav-item">
                   <a class="nav-link active   " style="color: #30ba8f;" aria-current="page" href="index.php">
                     <i class="bi bi-house-door-fill ps-1 pe-1" style="font-size: 1.4rem;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home"></i>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link  " style="color: #30ba8f;" href="knowUs.php">
                     <i class="bi bi-info-circle-fill ps-1 pe-1" style="font-size: 1.4rem;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Know Us"></i>

                   </a>
                 </li>

                 <li class="nav-item">
                   <a class="nav-link  " style="color: #30ba8f;" href="findUs.php">
                     <i class="bi bi-pin-map-fill ps-1 pe-2 " style="font-size: 1.4rem;" data-bs-toggle="tooltip " data-bs-placement="bottom" title="Find us"></i>
                   </a>
                 </li>
                 <!-- CREATE POST -->


                 <?php if (isset($_SESSION['username'])) { ?>
                   <!-- // User is logged in, show logout menu here -->


                   <!-- // User is not logged in, below show login menu here -->
                 <?php  } else if (!isset($_SESSION['username'])) {
                  } ?>


                 <li class="nav-item">
                   <?php
                    // session_start();

                    if (!isset($_SESSION['userName'])) {
                    ?>
                     <a class="nav-link  " style="color: #30ba8f;" href="#ID_Section_Login">
                       <i data-bs-toggle="modal" data-bs-target="#ID_Section_Login" class="bi bi-person-circle ps-1 pe-1" style="font-size: 1.4rem; color: dark;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login"></i>
                       <!-- </button> -->
                     </a>
                   <?php } ?>
                 </li>
                 <?php //include('loginButtonNavBar.php'); 
                  ?>

                 <li class="nav-item">
                   <a class="nav-link  " style="color: #30ba8f;" href="?logoutuser=logout">
                     <i class="bi bi-person-dash-fill ps-1 pe-2" name="UserLogout" style="font-size: 1.4rem;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Logout"></i>
                   </a>
                 </li>
                 <li class="nav-item">

                   <a class="nav-link " style="color: #30ba8f;" href="userProfileEdit.php">
                     <i class="bi bi-pencil-square ps-1 pe-1" style="font-size: 1.4rem; " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Profile"></i>

                   </a>
                 </li>
                 <!-- Button trigger modal_LOGIN -->
                 <li class="nav-item">
                   <a class="nav-link  " style="color: #30ba8f;" href="signUp.php">
                     <i class="bi bi-plus-circle ps-1 pe-2" style="font-size: 1.4rem;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sign Up"></i>
                   </a>
                 </li>

                 <div class="ps-5 mt-3 " style="color: #30ba8f;">
                   <a style="text-decoration:none" href="userProfileEdit.php" class="">
                     <h6 class="fs-6 text-uppercase" style="color: #30ba8f;"> <?php echo  $currentLoggedInUser; ?>
                       <i class="bi bi-circle-fill" <?php if (isset($_SESSION['userName'])) { ?>style="color: #00ff00" <?php } else { ?> style="color: #ff0000" <?php } ?>></i>
                     </h6>
                   </a>

                 </div>


               </ul>
             </div>

             <!--Nav Search bar and Search button -->

      

           </div>
         </div>
       </nav>
       <!--Navigation Tab ends here-->


     </div>


   </div>



 </head>
 <!--head ends here-->

 </html>