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

if (!isset($_SESSION['userName'])) {
  header("location: loginToSeeProductDetails.php");
}


//variables
$Post_ID = array();
$Post_Type = array();
$Post_Title = array();
$Post_Description = array();
$Post_category = array();
$Post_imageUrl = array();
$Post_location = array();

$index = 0;

$sql = "SELECT * FROM postdata";
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
    // echo $Product_Name;
    // echo "<tr><td>".$row["ProductID"]."</td><td>".$row["ProductName"]." ".$row["ProductCategory"]."</td></tr>";
    $index++;
  }
  echo "</table>";
} else {
  echo "0 results";
}


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
  <div class="container">
    <div class="row">
      <div class="col-2">

      </div>

      <div class="col-8 " style="background-color:  #393939 ">
        <br>

        <h3 class="text-white">CREATE POST</h3>
        <br>

        <form action="post.php" method="POST" class="row g-3">
          <?php include('server.php'); ?>
          <div class="col-12">
            <div class="mb-3">
              <div class="col-5 mb-3">
                <select class="form-select" aria-label="Default select example" name="Type" required>
                  <option selected>Type</option>
                  <option value="News">News</option>
                  <option value="Quest">Quest</option>
                </select>
              </div>
              <h5 class="offcanvas-title text-white" id="sidebar-label">Title</h5>
              <input type="text" id="" class="form-control form-control-lg fs-6" name="Title" placeholder="Post Title" required />
              <br>
              <textarea type="" class="form-control" id="CreatePostTextarea" rows="5" name="Description" placeholder="What's on your mind?" required></textarea>
            </div>
          </div>
          <div class="col-auto">
            <div class="col-auto mb-3">
              <select class="form-select" aria-label="Default select example" name="category" required>
                <option selected>Category</option>
                <option value="Ride sharing">Ride sharing</option>
                <option value="Restaurant buddy">Restaurant buddy</option>
                <option value="Emergency/Help">Emergency/Help</option>
                <option value="News">News</option>
              </select>
            </div>
            <div class="col-auto mb-3">
              <input class="form-control" type="file" id="createPostformFileMultiple" name="postImgUrl" multiple required>
            </div>
          </div>
          <div class="col-auto">
            <div class="col-auto mb-3">
              <select class="form-select" aria-label="Default select example" name="location" required>
                <option selected>Location</option>
                <option value="Dhanmondi">Dhanmondi</option>
                <option value="Mirpur">Mirpur</option>
                <option value="Tejgaon">Tejgaon</option>
                <option value="Gulshan">Gulshan</option>
                <option value="Banani">Banani</option>
              </select>
            </div>

          </div>

          <div class="position-relative">
            <button type="submit" class="btn text-light btn-lg mb-3 position-absolute bottom-0 end-0 me-1" style="background-color: #30ba8f;" name="post_data">Post</button>

            <!-- POST SUCCESS STARTS  -->


            <!-- POST SUCCESS ENDS -->
          </div>
          <div class="col-12 ps-1">
            <a href="index.php "><img style="max-width: 745px; max-height: 795px" src="06~Media_Images/Reality&VirtualLogo1.png" alt="imageNotFound"></a>
          </div>
        </form>
      </div>
      <div class="col-2">

      </div>
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