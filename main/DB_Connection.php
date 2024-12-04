<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "rnv";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

class ConnectionDetails
{
    function OpenConnection()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "rnv";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

        return $conn;
    }

    function CloseConnection($conn)
    {
        $conn->close();
    }

    //WARNING _UNWANTED DATA!
    public function selectedProductID($passedProductID)
    {
        $SelectedProduct_ID = $passedProductID;
        echo $SelectedProduct_ID;
    }
    //WARNING _UNWANTED DATA!
    function returnSelectedProduct()
    {

        return  $SelectedProduct_ID = 2;
    }
    //WARNING _UNWANTED DATA!
    function selectedProduct($id)
    {

        $proinfo = $id;
        return $proinfo;
        // }
    }

    // function user_login($data)
    // {
    //     $userEmail = $data['inputUserEmail'];
    //     $userPassword = md5($data['inputUserPassword']);

    //     $query = "SELECT * FROM user WHERE Email='$userEmail' AND password='$userPassword' ";

    //     if (mysqli_query($this->conn, $query)) {
    //         $result = mysqli_query($this->conn, $query);
    //         $user_info = mysqli_fetch_assoc($result);

    //         if ($user_info) {
    //             header('location:index.php');
    //             session_start();
    //             $_SESSION['userID'] = $user_info['user_id'];
    //             $_SESSION['userEmail'] = $user_info['Email'];
    //             $_SESSION['userName'] = $user_info['last_name'];
    //             $_SESSION['userPassword'] = $user_info['password'];
    //         } else {
    //             $errmsg = "Your Email or Password is incorrect!";
    //             return $errmsg;
    //         }
    //     }
    // }
    function user_logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['email']);
        unset($_SESSION['user_pass']);
        unset($_SESSION['user_name']);
        header('location:user_login.php');
    }
}
