<?php
//session_start();
//echo "Connected Successfully";



?>


<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "rnv";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);


if (isset($_POST['button_UserLogin'])) {
  $userLoginInfo = user_login($_POST, $conn);
}


function user_login($data, $connection)
{

  $userEmail = $data['inputUserEmail'];
  $userPassword = md5($data['inputUserPassword']);

  $query = "SELECT * FROM user WHERE Email='$userEmail' AND password='$userPassword' ";

  if (mysqli_query($connection, $query)) {
    $result = mysqli_query($connection, $query);
    $user_info = mysqli_fetch_assoc($result);

    if ($user_info) {
      header('location:index.php');

      session_start();
      $_SESSION['userID'] = $user_info['user_id'];
      $_SESSION['userEmail'] = $user_info['Email'];
      $_SESSION['userName'] =  $user_info['last_name'];
      $_SESSION['userPassword'] = $user_info['password'];
      $_SESSION['userType'] = $user_info['user_type'];
      // $_SESSION['userLocation'] = $user_info['state'];

    } else {
      header('location:loginFailure.php');
      return $errmsg = "Your Email or Password is incorrect!";
    }
  }

  //$connection->close();
}



// if (isset($_SESSION['userName'])) {
//   header("location: logoutForDetails.php");
// } else {
//   $currentLoggedInUser = "No User";
// }






?>

<!doctype html>

<html lang="en">



<!-- Modal LOGIN Starts here -->
<form action="userLogin_modal.php" method="POST">
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
            <input type="email" name="inputUserEmail" class="form-control fs-6" id="exampleFormControlInput1" placeholder="Enter Your Email">
          </div>
          <div class="pb-3">
            <label for="exampleFormControlInput1" class="form-label fs-5"> <i class="bi bi-lock" style="color: rgb(255, 72, 0);"></i> Password</label>
            <input type="password" name="inputUserPassword" class="form-control fs-6" id="exampleFormControlInput1" placeholder="Enter Your Password">
          </div>
        </div>
        <div class="modal-footer">

          <button name="button_UserLogin" type="submit" class="btn btn-primary fs-6" data-bs-dismiss="modal"><i class="bi bi-box-arrow-in-right"></i> &nbsp; Login</button>
          <a href="signUp.php"><button type="button" class="btn btn-primary fs-6" data-bs-dismiss="modal"><i class="bi bi-plus-circle"></i> &nbsp;Signup</button></a>
        </div>
        <a href="findUs.php">
          <p class="text-start ps-2"><i class="bi bi-question-circle" style="color: rgb(52, 212, 3);"></i> Forgot
            Password?..Sent us a message</p>
        </a>
      </div>
    </div>
  </div>
</form>
<!-- Modal LOGIN ends here -->


<!-- Modal Message -->

<?php if (isset($userLoginInfo)) { ?>



  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-4" id="staticBackdropLabel">Login Failure<i class="bi bi-check2-circle" style="color: rgb(0, 206, 45);"></i> </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="fs-6"> <?php echo $userLoginInfo; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary fs-6" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> <?php } ?>

<!-- Modal Message -->

</html>