<?php

    include('session.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['chkout_name']) || empty($_POST['chkout_apt'])){
            $error = "Empty Fields";
            header("location: error.html");
         }
         else{
        
            $conn = mysqli_connect("localhost", "root", "2199", "book-orders");

            $apt = $_POST['chkout_apt'];
            $street = $_POST['chkout_street'];
            $city = $_POST['chkout_city'];
            $pincode = $_POST['chkout_pincode'];
            $user_id = $login_session_id;

            $query = "INSERT INTO order_list (user_id,ord_loc_apt, ord_loc_street, ord_loc_city, ord_loc_pincode) values (?,?,?,?,?)";

            $stmt = $conn->prepare($query);
            $stmt->bind_param('isssi', $user_id, $apt, $street, $city, $pincode);
            $stmt->execute();
            $stmt->get_result();
            header('location:final.php');
        }

        $conn->close();
    }

?>