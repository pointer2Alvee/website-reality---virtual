<?php
session_start();
if (isset($_SESSION['userName'])) {
    header("location: logoutForDetails.php");
} else {
    $currentLoggedInUser = "No User";
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


    <link rel="stylesheet" href="02~css/Page_index.css">

    <?php include_once('header.php'); ?>

</head>
<!--head ends here-->


<!--body Starts here-->

<body>

    <!-- carousel starts here -->



    <!-- 
        <div class=" pt-2  container-lg container-md container-sm bg-dark">
         
        </div> -->



    <div class="container-lg container-md container-sm bg-dark bg-opacity-25 pb-5 ">
        <h3 class=" text-dark text-center p-3">CREATE A NEW ACCOUNT</h3>
        <form action="signUp.php" method="POST">
            <?php include('server.php'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="container py-1 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12">
                                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-lg-6">
                                                <div class="p-5">
                                                    <h3 class="fw-normal mb-5 text-dark">General
                                                        Infomation</h3>

                                                    <div class=" pb-2">
                                                        <select class="select" name="user_type">
                                                            <option value="1">Regular</option>
                                                            <option value="2">Premium</option>
                                                        </select>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-4 pb-2">

                                                            <div class="form-outline">
                                                                <input type="text" id="form3Examplev2" class="form-control form-control-lg fs-6" name="first_name" placeholder="Enter Your First Name" required />
                                                                <label class="form-label fs-6" for="form3Examplev2">First
                                                                    name</label><label class="text-danger fs-5">*</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6 mb-4 pb-2">

                                                            <div class="form-outline">
                                                                <input type="text" id="form3Examplev3" class="form-control form-control-lg fs-6" name="last_name" placeholder="Enter Your Last Name" required />
                                                                <label class="form-label fs-6" for="form3Examplev3">Last
                                                                    name</label><label class="text-danger fs-5">*</label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="date" id="form3Examplev4" class="form-control form-control-lg fs-6" name="dob" placeholder="Enter Your Date of Birth" required />
                                                            <label class="form-label" for="form3Examplev4">Date Of birth</label><label class="text-danger fs-5">*</label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="email" id="form3Examplev4" class="form-control form-control-lg fs-6" name="email" placeholder="Enter Your Email" required />
                                                            <label class="form-label" for="form3Examplev4">Email</label><label class="text-danger fs-5">*</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="password" id="form3Examplev4" class="form-control form-control-lg fs-6" name="password1" placeholder="Enter a Strong Password" required />
                                                            <label class="form-label" for="form3Examplev4">Password</label><label class="text-danger fs-5">*</label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="password" id="form3Examplev4" class="form-control form-control-lg fs-6" name="password2" placeholder="Re-type your Password" required />
                                                            <label class="form-label" for="form3Examplev4">Confirm
                                                                Password</label><label class="text-danger fs-5">*</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 bg-dark text-white">
                                                <div class="p-5">
                                                    <h3 class="fw-normal mb-5">Contact Details</h3>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="form3Examplea2" class="form-control form-control-lg fs-6" name="house_address" placeholder="House Name / House Number / Flat Number etc." required />
                                                            <label class="form-label" for="form3Examplea2">House Address
                                                            </label><label class="text-danger fs-5">*</label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="form3Examplea3" class="form-control form-control-lg fs-6" name="street_address" placeholder="Street Name / Street Number / Specific Location" required />
                                                            <label class="form-label" for="form3Examplea3">Street Address
                                                            </label><label class="text-danger fs-5">*</label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5 mb-4 pb-2">

                                                            <div class="form-outline form-white">
                                                                <input type="number" id="form3Examplea4" class="form-control form-control-lg fs-6" name="zip_code" placeholder="Zip Code" required />
                                                                <label class="form-label" for="form3Examplea4">Zip
                                                                    Code</label><label class="text-danger fs-5">*</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-7 mb-4 pb-2">

                                                            <div class="form-outline form-white">
                                                                <!-- <input type="text" id="form3Examplea5" class="form-control form-control-lg fs-6" name="state" placeholder="City" required /> -->
                                                                <select class="select" name="state" placeholder="City">
                                                                    <option selected>City</option>
                                                                    <option value="Dhanmondi">Dhanmondi</option>
                                                                    <option value="Mohammedpur">Mohammedpur</option>
                                                                    <option value="Gulshan">Gulshan</option>
                                                                    <option value="Banani">Banani</option>
                                                                    <option value="New Market">New Market</option>
                                                                    <option value="Gulistan">Gulistan</option>
                                                                    <option value="Tejgaon">Tejgaon</option>
                                                                </select>
                                                                <label class="form-label" for="form3Examplea5">State</label><label class="text-danger fs-5">*</label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="form3Examplea6" class="form-control form-control-lg fs-6" name="country" placeholder="Country" required />
                                                            <label class="form-label" for="form3Examplea6">Country</label><label class="text-danger fs-5">*</label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5 mb-4 pb-2">

                                                            <div class="form-outline form-white">
                                                                <input type="text" id="form3Examplea7" class="form-control form-control-lg fs-6" placeholder="+88" disabled />
                                                                <label class="form-label" for="form3Examplea7">Code
                                                                    +</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-7 mb-4 pb-2">

                                                            <div class="form-outline form-white">
                                                                <input type="number" id="form3Examplea8" class="form-control form-control-lg fs-6" name="phone_number" placeholder="Enter your phone number" required />
                                                                <label class="form-label" for="form3Examplea8">Phone
                                                                    Number</label><label class="text-danger fs-5">*</label>
                                                            </div>

                                                        </div>
                                                    </div>



                                                    <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                                        <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" required />
                                                        <label class="form-check-label text-white" for="form2Example3">
                                                            I do accept the Terms and Conditions of your site.
                                                        </label>
                                                    </div>

                                                    <button type="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark" name="reg_user">Register</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>

            </div>
        </form>
    </div>

    <!-- Modal LOGIn -->
    <div class="modal fade" id="ID_Section_Login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-4  text-end" id="staticBackdropLabel"> <i class="bi bi-person-circle" style="color: rgb(0, 0, 0);"></i> LOGIN </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="signUp.php" method="POST">
                        <?php //include('errors.php') 
                        ?>
                        <div class="pb-3">

                            <label for="exampleFormControlInput1" class="form-label fs-5"> <i class="bi bi-envelope" style="color: rgb(0, 225, 255);"></i> Email</label>
                            <input type="email" class="form-control fs-6" id="exampleFormControlInput1" name="modal_email" placeholder="Enter Your Email">
                        </div>
                        <div class="pb-3">
                            <label for="exampleFormControlInput1" class="form-label fs-5"> <i class="bi bi-lock" style="color: rgb(255, 72, 0);"></i> Password</label>
                            <input type="password" class="form-control fs-6" id="exampleFormControlInput1" name="modal_password" placeholder="Enter Your Password">
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" name="login_user" class="btn btn-primary fs-6" data-bs-dismiss="modal"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                    <a href="signUp.php"><button href="signUp.php" type="button" class="btn btn-primary fs-6" data-bs-dismiss="modal"><i class="bi bi-plus-circle"></i>Signup</button></a>
                </div>
                <a href="findUs.php">
                    <p class="text-start ps-2"><i class="bi bi-question-circle" style="color: rgb(52, 212, 3);"></i>
                        Forgot Password?..Sent us a message</p>
                </a>
            </div>
        </div>
    </div>





    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
<!--body ends here-->



<!--footer Starts here-->
<?php include_once('footer.php'); ?>
<!--footer ends here-->

</html>