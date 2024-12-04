<?php session_start();
 //------

if (!isset($_SESSION['userName'])) {
    header("location: loginToSeeProductDetails.php");
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


    <!-- profile Edit Starts here -->
    <div class="container ">
        <div class="row ">
            <div class="col-2 bg-dark bg-opacity-100">
                <div class=" justify-content-between align-items-center mb-3">
                    <h4 class="text-right fs-3 pt-3 text-uppercase text-light">User Profile Settings</h4>
                </div>
            </div>
            <div class="col-8 ">
                <div class="container rounded bg-white my-5">
                    <form action="userProfileEdit.php" method="POST">
                        <?php include('server.php'); ?>
                        <div class="row">
                            <div class="col-12">
                                <?php //-------------------------------------------------------------
                                if (isset($_SESSION['userID'])) {
                                    $userID = $_SESSION['userID'];

                                    $query = "Select * from user where user_id = '$userID' ";
                                    $query_run = mysqli_query($db, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                            //echo $row['first_name'];
                                ?>
                                            <div class="p-2 py-1">
                                                <!-- <div class=" justify-content-between align-items-center mb-3">
                                    <h4 class="text-right text-uppercase">Customer Profile Settings</h4>
                                </div> -->
                                                <div class="row mt-2 ">
                                                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" name="e_first_name" placeholder="first name" value="<?= $row['first_name'] ?>" required></div>
                                                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" name="e_last_name" value="<?= $row['last_name'] ?>" placeholder="last name" required></div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-12  pt-2"><label class="labels">Email ID</label><input type="text" class="form-control" name="e_email" placeholder="Email id" value="<?= $row['Email'] ?>" required></div>
                                                    <div class="col-md-12  pt-2"><label class="labels">Mobile Number</label><input type="text" class="form-control" name="e_phone" placeholder="Phone number" value="<?= $row['phone_number'] ?>" required></div>
                                                    <div class="col-md-12  pt-2"><label class="labels">Password</label><input type="password" class="form-control" name="e_password1" placeholder="Update Password" value="" required></div>
                                                    <div class="col-md-12  pt-2"><label class="labels">Confirm Password</label><input type="password" class="form-control" name="e_password2" placeholder="Confirm new password" value="" required></div>
                                                    <div class="col-md-12  pt-2 ">
                                                        <hr class="text-dark">
                                                    </div>
                                                    <div class="col-md-12  pt-2"><label class="labels">House Address</label><input type="text" class="form-control" name="e_house_address" placeholder="enter House Address" value="<?= $row['house_address'] ?>" required></div>
                                                    <div class="col-md-12  pt-2"><label class="labels">Street Address</label><input type="text" class="form-control" name="e_street_address" placeholder="enter Street Address" value="<?= $row['street_address'] ?>" required></div>
                                                    <div class="col-md-12  pt-2"><label class="labels">Zipcode</label><input type="text" class="form-control" name="e_zip" placeholder="enterzipcode " value="<?= $row['zip_code'] ?>" required></div>



                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-6"><label class="labels">State</label><input type="text" class="form-control" name="e_state" value="<?= $row['state'] ?>" placeholder="state" required></div>
                                                    <div class="col-md-6 "><label class="labels">Country</label><input type="text" class="form-control" name="e_country" placeholder="country" value="<?= $row['country'] ?>" required></div>

                                                </div>
                                                <div class="mt-3 text-start "><button class="btn btn-primary profile-button" type="submit" name="save_profile" >Save Profile</button></div>
                                            </div>
                                <?php
                                        }
                                    } else {
                                        echo "No records Found";
                                    }
                                }
                                ?>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-2 ">

            </div>
        </div>


    </div>




    <!-- profile Edit ends here -->




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