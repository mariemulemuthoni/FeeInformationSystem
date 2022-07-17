<?php
include_once 'configure.php';

$name = $_POST['pmname'];


    $sql = "INSERT INTO tbl_paymentmethods(Payment_methodName)VALUES ('$name'); ";
    $result = mysqli_query($conn, $sql);

    header("Location: ../../addPaymentMethod.php?submit = success");
