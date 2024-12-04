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


  <!-- Login Failure Message section Starts here -->
  <div class="row">
    <div class="col-2">

    </div>
    <div class="col-8 bg-dark p-5">
      <h1 class="text-danger">LOGIN FAILURE!</h1>
      <p class="text-light">Incorrrect Email or Password
        <a class="text-primary " href="#ID_Section_Login" data-bs-toggle="modal" data-bs-target="#ID_Section_Login">
          Try again
        </a>
      </p>
      <p class="text-light">New User?
        <a class="text-primary " href="signUp.php">
          Register NOW For Free!
        </a>


      </p>
    </div>
    <div class="col-2">

    </div>
  </div>

  <!-- Login Failure Message section  ends here -->



  <!-- Modal LOGIN starts here -->
  <?php include_once('userLogin_modal.php'); ?>
  <!-- Modal LOGIN ends here -->

  <!--Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
<!--body ends here-->


<!--footer Starts here-->
<?php //include_once('footer.php'); 
?>
<!--footer ends here-->

</html>