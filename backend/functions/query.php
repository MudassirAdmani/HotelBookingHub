<?php
include('../include/database/db.php');
function query($sql, $values, $type)
{
    $con = $GLOBALS['con'];
    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param($type, ...$values);
        if ($stmt->execute()) {
        }
    } else {
        die("Error in preparing SQL statement: " . mysqli_error($con));
    }
}
