<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['fullname']);
    $mobile = "+91" . htmlspecialchars($_POST['mobile']);
    $pickup_date = htmlspecialchars($_POST['pickup_date']);
    $pickup_time = htmlspecialchars($_POST['pickup_time']);
    $address = htmlspecialchars($_POST['address']);
    $pincode = htmlspecialchars($_POST['pincode']);

    $to = "shanthilakshmi@modasou.com"; // CHANGE THIS
    $subject = "New Cloth Pickup Request";

    $message = "
New Cloth Pickup Request

Name: $name
Mobile: $mobile

Pickup Date: $pickup_date
Pickup Time: $pickup_time

Address: $address
Pincode: $pincode
";

    $headers = "From: MODASOU <no-reply@yourdomain.com>";
if (mail($to, $subject, $message, $headers)) {

    // Redirect with client mobile number
    header("Location: success.html?mobile=$mobile");
    exit();

}

    
}
?>

