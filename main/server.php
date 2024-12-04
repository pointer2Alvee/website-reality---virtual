<?php

if (isset($_SESSION['userID'])) {
    $user_ID = $_SESSION['userID'];
}

//session_start();

//initializing variables
$user_type = "";
$first_name = "";

$errors = array();

//connection to db
 $db = mysqli_connect('localhost', 'root', '', 'rnv') or die("could not connect to database");

/*$resOrder = array(
    0 => $_POST['user_type'],
    1 => $_POST['first_name'],
    2 => $_POST['last_name'],
    3 => $_POST['dob'],
    4 => $_POST['email'],
    5 => $_POST['password1'],
    6 => $_POST['password2'],
    7 => $_POST['house_address'],
    8 => $_POST['street_address'],
    9 => $_POST['zip_code'],
    10 => $_POST['state'],
    11 => $_POST['country'],
    12 => $_POST['phone_number']
);*/

//$value = isset($array['user_type']) ? $array['user_type'] : '';

//list($user_type) = array(0 => 'user_type');

//Post data
if (isset($_POST['post_data'])) {
    $target_dir = "06~Media_Images/";

    $Type = mysqli_real_escape_string($db, $_POST['Type']);
    $Title = mysqli_real_escape_string($db, $_POST['Title']);
    $Description = mysqli_real_escape_string($db, $_POST['Description']);
    $category =  mysqli_real_escape_string($db, $_POST['category']);
    $postImgUrl = mysqli_real_escape_string($db, $_POST['postImgUrl']);
    $location = mysqli_real_escape_string($db, $_POST['location']);
    $user_ID = $_SESSION['userID'];
    $postImgUrl = $target_dir . $postImgUrl;


    //check db for existing user with same email
    //$user_check_query = "SELECT * FROM postdata WHERE Email = '$email' LIMIT 1";

    // $results = mysqli_query($db, $user_check_query);
    // $user = mysqli_fetch_assoc($results);
    // if ($user) {
    //     if ($user['Email'] == $email) {
    //         array_push($errors, "This Email has already been used");
    //         echo "* This Email has already been used";
    //     }
    // }

    //post to db the new post

    if (count($errors) == 0) {
        $query = "INSERT INTO postdata (Type, Title, Description, category, postImgUrl, location, user_id) VALUES ('$Type', '$Title', '$Description', '$category', '$postImgUrl', '$location', '$user_ID')";
        mysqli_query($db, $query);

        //$_SESSION['first_name'] = $first_name;
        //$_SESSION['success'] = "You are now logged in";
        //header('location: index.html');
    }
}



//register user

if (isset($_POST['reg_user'])) {
    $user_type = mysqli_real_escape_string($db, $_POST['user_type']);
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $dob =  mysqli_real_escape_string($db, $_POST['dob']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);
    $house_address = mysqli_real_escape_string($db, $_POST['house_address']);
    $street_address = mysqli_real_escape_string($db, $_POST['street_address']);
    $zip_code = mysqli_real_escape_string($db, $_POST['zip_code']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);

    if ($password1 != $password2) {
        array_push($errors, "Passwords do not match");
        echo "* Passwords do not match";
    }

    //check db for existing user with same email
    $user_check_query = "SELECT * FROM user WHERE Email = '$email' LIMIT 1";

    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results);
    if ($user) {
        if ($user['Email'] == $email) {
            array_push($errors, "This Email has already been used");
            echo "* This Email has already been used";
        }
    }

    //register the user if no error

    if (count($errors) == 0) {
        $password = md5($password1);
        $query = "INSERT INTO user (user_type, first_name, last_name, date_of_birth, Email, password, house_address, street_address, zip_code, state, country, phone_number) VALUES ('$user_type', '$first_name', '$last_name', '$dob', '$email', '$password', '$house_address', '$street_address', '$zip_code', '$state', '$country', '$phone_number')";
        mysqli_query($db, $query);

        //$_SESSION['first_name'] = $first_name;
        //$_SESSION['success'] = "You are now logged in";
        //header('location: index.html');
    }
}

if (isset($_POST['save_profile'])) {
    $first_name = mysqli_real_escape_string($db, $_POST['e_first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['e_last_name']);
    $email = mysqli_real_escape_string($db, $_POST['e_email']);
    $phone_number = mysqli_real_escape_string($db, $_POST['e_phone']);
    $password1 = mysqli_real_escape_string($db, $_POST['e_password1']);
    $password2 = mysqli_real_escape_string($db, $_POST['e_password2']);
    $house_address = mysqli_real_escape_string($db, $_POST['e_house_address']);
    $street_address = mysqli_real_escape_string($db, $_POST['e_street_address']);
    $zip_code = mysqli_real_escape_string($db, $_POST['e_zip']);
    $state = mysqli_real_escape_string($db, $_POST['e_state']);
    $country = mysqli_real_escape_string($db, $_POST['e_country']);

    if ($password1 != $password2) {
        array_push($errors, "Passwords do not match");
        echo "* Passwords do not match";
    }

    //check db for existing user with same email
    $user_check_query = "SELECT * FROM user WHERE Email = '$email' LIMIT 1";

    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results);
    if ($_SESSION['userEmail'] == $email) {
        //do nothing
    } else if ($user) {
        if ($user['Email'] == $email) {
            array_push($errors, "This Email has already been used");
            echo "* This Email has already been used";
        }
    }

    if (count($errors) == 0) {
        $password = md5($password1);
        $query = "UPDATE user SET first_name = '$first_name', last_name = '$last_name', Email = '$email', password = '$password', house_address = '$house_address', street_address = '$street_address', zip_code = '$zip_code', state = '$state', country = '$country', phone_number = '$phone_number' 
        where user_id = '$user_ID' ";
        mysqli_query($db, $query);

        //$_SESSION['success'] = "Message sent";
        // header('location: index.php');
    }
}

//form validation
/*if(empty($first_name)) {array_push($errors, "First name is required");}
if(empty($last_name)) {array_push($errors, "Last name is required");}
if(empty($dob)) {array_push($errors, "Date of birth is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password1)) {array_push($errors, "Password is required");}
if(empty($house_address)) {array_push($errors, "House address is required");}
if(empty($street_address)) {array_push($errors, "Street address is required");}
if(empty($zip_code)) {array_push($errors, "Zip code is required");}
if(empty($state)) {array_push($errors, "State is required");}
if(empty($country)) {array_push($errors, "Country is required");}
if(empty($phone_number)) {array_push($errors, "Phone number is required");}*/




//login user
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['modal_email']);
    $password = mysqli_real_escape_string($db, $_POST['modal_password']);



    $password = md5($password);
    $query = "SELECT * FROM user WHERE Email = '$email' AND password = '$password' ";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results)) {
        header('Location: index.php');
        /*$_SESSION['firstname'] = $first_name;
        $_SESSION['success'] = "Logged in successfully!";*/

        /*<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4" id="staticBackdropLabel">Logged in<i
                            class="bi bi-check2-circle" style="color: rgb(0, 206, 45);"></i> </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="fs-6">You logged in Successfully !</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary fs-6" data-bs-dismiss="modal">Close</button>
                        </div>
                     </div>
                </div>
            </div>*/
        //header('location: server.php');

    } else {
        array_push($errors, "Wrong Email/Password combination. Please try again ...");
    }
}
