<?php
session_start();
include 'db_connection.php';
$conn = OpenCon();
//echo "Connected Successfully";

$objectProductDetails = new ConnectionDetails();

//$currentProduct_ID = $objectProductDetails->returnSelectedProduct();

?>


<?php
//WARNING _UNWANTED DATA!
if (isset($_GET['status'])) {
  $selectedProductID = $_GET['id'];
  // $_SESSION['selectedProductID'] =  $_GET['id'];
  $userType = $_GET['userType'];
  if ($_GET['status'] == 'productView') {
    $currentProduct_ID =  $objectProductDetails->selectedProduct($selectedProductID);
  } //else {
  // $currentProduct_ID =   $_SESSION['selectedProductID'];
  //}
}


if (!isset($_SESSION['userName'])) {
  header("location: loginToSeeProductDetails.php");
} else {
  //  if ($userType != 2) {
  //  header("location: loginToSeeProductDetails.php");
  // }
  $currentLoggedInUser = "No User";
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

$index = 0;

$sql = "SELECT * FROM postdata WHERE postDataId = $currentProduct_ID";
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


//quest participation 

if (isset($_POST['Button_userParticipate'])) {
  $currentLoggedInUserID = $_SESSION['user_id'];
  $currentLoggedInUserName = $_SESSION['userName'];
  $activityStatus = 'participated';

  $sql = "INSERT INTO activity (post_ID, participant_ID, 	activity_Status ) VALUES ('$currentProduct_ID','$currentLoggedInUserID','$activityStatus')";
  $result = $conn->query($sql);
}


//$objProductDetails->CloseConnection($conn);



CloseCon($conn);

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


  <?php include_once('header.php'); ?>

</head>
<!--head ends here-->





<!--body Starts here-->

<body>






  <div class="container-fluid">





    <div class="row ">

      <div class="col-2"></div>

      <div class="col-8  ">

        <form action="productDetails.php" method="POST">
          <section>

            <div class="row ">
              <!-- col-md-6 -->
              <div class="col-md-6 mb-1 mb-md-0  ">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox  ">

                  <div class="row product-gallery p-1">

                    <div class="col-11 p-3">

                      <?php foreach ($Post_ID as $Key => $value) { ?>
                        <figure class="view overlay rounded z-depth-1 main-img">
                          <img src="<?php echo $Post_imageUrl[$Key]; ?>" class="img-fluid z-depth-1">

                        </figure>


                    </div>
                  </div>

                </div>

              </div>
              <div class="col-md-6 bg-dark bg-opacity-100 text-white p-3 py-5">

                <h5 class="fs-3"><?php echo $Post_Title[$Key]; ?>







                </h5>
                <p class="mb-1 small text-uppercase"><i class="bi bi-info-circle-fill text-warning"></i> &nbsp;<?php echo $Post_Type[$Key];; ?></p>



                <p class="text-uppercase"> <span class="mr-1 fw-bold text-uppercase">CATEGORY: &nbsp;</span><?php echo $Post_category[$Key];; ?></p>
                <p class="pt-1 fs-3"><i style="color:#30ba8f " class="bi bi-arrow-down-right-circle-fill"> &nbsp;</i><?php echo $Post_Description[$Key];; ?></p>

                <label class="pt-1  fs-5"> <i class=" text-danger bi bi-geo-alt-fill"> </i> <?php echo $Post_location[$Key]; ?> | <?php echo $Post_Time[$Key]; ?></label>
                <br>
                <label style="font-size:19px; " class="pt-1 "> <i style="color:#30ba8f" class="bi bi-person-fill"></i> </i>POSTED BY:- <?php echo $user_lastName[$key]; ?> </label>
                <hr>


                <!-- <button type="button" class="btn btn-primary btn-md mr-1 mb-2"> <i class="bi bi-bag-fill"></i> Buy
                                      now</button> -->
                <div class="buttons">
<!-- 
                  <button type="submit" name="Button_userParticipate" class="btn btn-light btn-md mr-1 mb-2"><i class="bi bi-lightning-charge-fill"></i> &nbsp;PARTICIPATE</button>
                  <button type="submit" name="Button_QuestCompleted" class="btn btn-success btn-md mr-1 mb-2"><i class="bi bi-check-circle-fill"></i> &nbsp;COMPLETED</button>
                  <button type="submit" name="Button_QuestCancelled" class="btn btn-danger btn-md mr-1 mb-2"><i class="bi bi-x-circle-fill"></i> &nbsp;CANCEL</button> -->
                  <br><br>
                <?php } ?>
                </div>
                <!-- <div class=" row">
                  <div class="col-4 ">
                    <h6 class="fs-6"> ACTIVITY : &nbsp; </h6>
                    <div>
                      <div class="spinner-grow text-warning" style="max-width:15px; max-height:15px;" role="status">
                      </div>
                      <div class="spinner-grow text-warning" style="max-width:15px; max-height:15px;" role="status">
                      </div>
                      <div class="spinner-grow text-warning" style="max-width:15px; max-height:15px;" role="status">
                      </div>
                      <div class="spinner-grow text-warning" style="max-width:15px; max-height:15px;" role="status">
                      </div>
                      <div class="spinner-grow text-warning" style="max-width:15px; max-height:15px;" role="status">
                      </div>
                      <h1 class="text-warning" style="font-size: 17px">ON-GOING...</h1>
                      <h1 class="text-warning" style="font-size: 17px">QUEST AVAILABLE</h1>
                      <h1 class="text-warning" style="font-size: 17px">QUEST COMPLETED</h1>
                    </div>
                  </div>
                  <br>
                  <h6 class="" style="font-size: 15px;"> ACTIVE PARTICIPANTS: &nbsp; <span class="badge rounded-pill bg-danger" style="font-size: 15px;">1</span></h6>
                  <h1 class="text-INFo" style="font-size: 17px">QUEST COMPLETION DATE:</h1>
                </div> -->
                <div class="col-7">

                </div>
              </div>
            </div>
      </div>

      </section>
      </form>




    </div>


    <div class="col-2"> </div>
  </div>
  </div>


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