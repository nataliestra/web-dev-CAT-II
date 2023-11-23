<?php
require_once "../configs/DbConn.php";

if(isset($_POST["send_message"])){
    $fullname = addslashes($_POST["fullname"]);
    $email = addslashes($_POST["email"]);
    $address = addslashes($_POST["address"]);
    $dateofbirth= addslashes($_POST["dateofbirth"]);
    $autobiography= addslashes($_POST["autobiography"]);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Invalid email");
    }

    if(!filter_var($fullname, FILTER_VALIDATE_EMAIL)){
        die("Invalid fullname");
    }

    $stmt = $pdo->prepare("INSERT INTO messages (fullname, email, address, , dateofbirth, autobiography,) VALUES (?, ?, ?, ?)");

    $stmt->execute([$fullname, $email, $address, $dateofbirth, $autobiography]);

    header("Location: ../view_messages.php");
    exit();
}
