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
  <!--head ends here-->





  <!--body Starts here-->

<body>




  <div class=" text-center pt-2 pb-2 container-lg container-md container-sm bg-dark text-light">
    <h3><label>TEAM</label> &nbsp;<label class="text-danger">RASYN</label><label> &nbsp; HEADS</label></h3>
  </div>


  <!-- <img src="06~Media_Images/alvee.jpg" class=" card-img-top " alt="..."> -->
  <div class="container">
    <div class="row">
      <!-- <div class="col-2">

      </div> -->
      <div class="col-12 pt-2">
        <div class="row">
          <div class="col-6">
            <div class="card mb-3" style="max-width: 840px;">
              <div class="row g-0">
                <div class="col-md-5">
                  <img src="06~Media_Images/alvee.jpg" class="img-fluid rounded-start" style="max-width: 15rem;" alt="...">
                </div>
                <div class="col-md-7 bg-dark text-light">
                  <div class="card-body">
                    <h5 class="card-title ">Alvee</h5>
                    <p class="card-text ">We have done the project using Boostrap, Html,CSS. The query is written in MySQL</p>
                    <p class="card-text "><small class="">CSE Undergrad, AUST <br> </small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card mb-3" style="max-width: 840px;">
              <div class="row g-0">
                <div class="col-md-5">
                  <img src="06~Media_Images/rahat.jpg" class="img-fluid rounded-start" style="max-width: 15rem;" alt="...">
                </div>
                <div class="col-md-7  bg-dark text-light">
                  <div class="card-body">
                    <h5 class="card-title">Rahat</h5>
                    <p class="card-text">For the back end, We have used php. The editor used is VSCode</p>
                    <p class="card-text"><small class="">CSE Undergrad, AUST <br> Programmer </small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-2">

      </div> -->
    </div>
  </div>




  <!-- Customer Reviews Starts  -->

  <div class=" text-center pt-2 pb-2 text-light container-lg container-md container-sm bg-dark bg-opacity-100">
    <h3><label>TEAM</label><label class="text-danger"> &nbsp;RASYN</label><label> &nbsp; SPECIALISTS</label></h3>
  </div>



  <div class="container-lg bg-secondary bg-opacity-75 p-4">

    <div class="row pt-3">

      <div class="col  ">
        <div class="card " style="width: 21rem;">
          <img src="06~Media_Images/alvee.jpg" class="card-img-top rounded-3" alt="...">
          <div class="card-body">
            <p class="card-text text-start-justified " style="font-size: 0.8rem;">
              One of the best robotics and engineering related page. videos are very descriptive. <br>
              <br>
              -Sadman Alvee
              <br>

            </p>
          </div>
        </div>
      </div>
      <div class="col  ">
        <div class="card" style="width: 21rem;">
          <img src="06~Media_Images/rahat.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-start-justified " style="font-size: 0.8rem;">
              It will help you a lot if you are interested in doing robotics kinda staff. <br>
              <br>
              -Rahat Ashik
              <br>
              -Senior Instructor
            </p>
          </div>
        </div>
      </div>
      <div class="col ">
        <div class="card" style="width: 21rem;">
          <img src="06~Media_Images/reviewAzmi.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-start-justified " style="font-size: 0.8rem;">

              Dling with Electricals? This is a gold mine of knowledge. Hats off to the creator of this page.
              <br>
              <br>
              -Salsabeel Noor Azmi
              <br>
              -Senior Instructor
            </p>
          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- Customer Reviews ends  -->

  <!-- Modal LOGIN Starts here -->
  <div class="modal fade" id="ID_Section_Login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-4  text-end" id="staticBackdropLabel"> <i class="bi bi-person-circle" style="color: rgb(0, 0, 0);"></i> LOGIN </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="pb-3">

            <label for="exampleFormControlInput1" class="form-label fs-5"> <i class="bi bi-envelope" style="color: rgb(0, 225, 255);"></i> Email</label>
            <input type="email" class="form-control fs-6" id="exampleFormControlInput1" placeholder="Enter Your Email">
          </div>
          <div class="pb-3">
            <label for="exampleFormControlInput1" class="form-label fs-5"> <i class="bi bi-lock" style="color: rgb(255, 72, 0);"></i> Password</label>
            <input type="password" class="form-control fs-6" id="exampleFormControlInput1" placeholder="Enter Your Password">
          </div>
        </div>
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary fs-6" data-bs-dismiss="modal"><i class="bi bi-box-arrow-in-right"></i> Login</button>
          <button type="button" class="btn btn-primary fs-6" data-bs-dismiss="modal"> <i class="bi bi-plus-circle"></i> Signup</button>
        </div>
        <a href="">
          <p class="text-start ps-2"><i class="bi bi-question-circle" style="color: rgb(52, 212, 3);"></i> Forgot
            Password?</p>
        </a>
      </div>
    </div>
  </div>
  <!-- Modal LOGIN ends here -->


  <!--Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
<!--body ends here-->



<!--footer Starts here-->
<?php include_once('footer.php'); ?>
<!--footer ends here-->

</html>