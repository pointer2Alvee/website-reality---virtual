<?php
session_start();
include('server_findUs.php');
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



    <!-- Find us section Starts here -->


    <div class="text-dark container-lg container-md container-sm w-100 h-100 bg-secondary bg-opacity-25 pb-3">
        <h3 class="text-center pt-3 pb-2"><i class="bi bi-pin-map-fill" style="color: rgb(37, 37, 37);"></i> FIND US
        </h3>

        <div class="row">


            <div class="col-12 fs-3 pt-3 ">
                <form action="findUs.php" method="POST">
                    <?php include('errors.php') ?>
                    <h4 class="text-start pb-3 fs-3 "> <i class="bi bi-envelope-fill" style="color: rgb(3, 39, 243);"></i> Message
                        Us
                    </h4>
                    <div class="pb-3 ">
                        <label for="exampleFormControlInput1" class="form-label fs-5 ">Name</label> <label class="text-danger fs-5">*</label>
                        <input type="text" class="form-control fs-6" id="exampleFormControlInput1" name="name" placeholder="Enter Your Name" required />
                    </div>

                    <div class="pb-3">

                        <label for="exampleFormControlInput1" class="form-label fs-5">Email</label> <label class="text-danger fs-5">*</label>
                        <input type="email" class="form-control fs-6" id="exampleFormControlInput1" name="email" placeholder="Enter Your Email" required />
                    </div>
                    <div class="pb-3">
                        <label for="exampleFormControlInput1" class="form-label fs-5">Phone</label>
                        <input type="tel" class="form-control fs-6" id="exampleFormControlInput1" name="phone" placeholder="Enter Your Phone Number" required />
                    </div>
                    <div class="pb-3">
                        <label for="exampleFormControlInput1" class="form-label fs-5">Subject</label> <label class="text-danger fs-5">*</label>
                        <input type="text" class="form-control fs-6" id="exampleFormControlInput1" name="subject" placeholder="Subject Of Your Query" required />
                    </div>
                    <div class="">
                        <label for="exampleFormControlTextarea1" class="form-label fs-5">Message</label> <label class="text-danger fs-5">*</label>
                        <textarea class="form-control fs-6" id="exampleFormControlTextarea1" rows="5" name="message" placeholder="Your Message" required></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="btn btn-primary " name="msgSubmit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Submit
                        </button>
                    </div>

                    <!-- <div class=" col-6 text-end">
                    <label class="text-danger  text-endfs-5">*</label> <label for="exampleFormControlTextarea1" class="form-label fs-5">Marked Are Required</label> -->

            </div>

            <!-- Button trigger modal  -->




            <!-- Modal DB WORK NEEDED-->
            <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4" id="staticBackdropLabel">Message Delievered <i class="bi bi-check2-circle" style="color: rgb(0, 206, 45);"></i> </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="fs-6">Your Message Sent Successfully</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary fs-6" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>  -->
        </div>

        <!-- Modal LOGIN starts here -->
        <?php include_once('userLogin_modal.php'); ?>
        <!-- Modal LOGIN ends here -->




        <div class="row pt-3">
            <div class="col-6 fs-3 p-3 ">
                <h4 class="text-center"><i class="bi bi-geo-alt-fill" style="color: rgb(49, 49, 49);"></i> Locate Us
                </h4>

                <p class=" pt-3 pb-3 fs-4 text-justified">
                    R&V HeadQuaters <br>
                    House No:-25, Road no:-#9/A, Satmashjid Road, Dhanmondi, Dhaka-1209, Bangladesh
                </p>

                <p class=" pb-3 fs-5 text-justified">
                    <i class="bi bi-envelope-fill" style="color: rgb(49, 49, 49);"></i> Email:
                    <i>R&V@gmail.com</i>
                    <br>
                    <i class="bi bi-telephone-fill" style="color: rgb(49, 49, 49);"></i> Phone:
                    <i>+8809999999999</i> <br>
                    bKash | Rocket | Nagad - Supported <i class="bi bi-check-circle" style="color: rgb(4, 129, 4);"></i> <br>
                <div class="pt-5">
                    <i class="bi bi-facebook  pe-1 " style="color: rgb(9, 10, 10);"></i>
                    <i class="bi bi-instagram ps-1 pe-1  " style="color: rgb(17, 17, 16);"></i>
                    <i class="bi bi-youtube ps-1 pe-2  " style="color: rgb(12, 12, 12);"></i>
                </div>
                </p>
            </div>

            <div class="col-6 bg-dark fs-3 pt-3 pb-3">
                <h4 class="text-center"> <i class="bi bi-geo-fill" style="color: rgb(235, 235, 235);"></i></h4>

                <div class="card " style="max-width: 100%;" style="max-height: 100%;">
                    <div class="card-body">
                        <div id="map-container-google-8" class="z-depth-1-half map-container-5" style="height: 300px">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.036944850703!2d90.36710723688533!3d23.747050044427503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1632386007771!5m2!1sen!2sbd" width="400" height="300" style="border:0;" allowfullscreen="" loading="fast"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Find us section Starts here -->



    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
<!--body ends here-->

<!--footer Starts here-->
<?php include_once('footer.php'); ?>
<!--footer ends here-->

</html>