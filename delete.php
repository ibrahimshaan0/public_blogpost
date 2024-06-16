<?php

if (!isset($_SESSION['status'])) {
    header("Location: login.php");
}

include "db_connection.php";

$deleteID = $_GET["id"];
$delete_status = "";

$query = mysqli_query($conn, "DELETE FROM blogs WHERE id='$deleteID' ");
if ($query)
    $delete_status =  "Deleted Successfully";

header("Location: dashboard.php");
