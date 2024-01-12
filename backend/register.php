<?php
include('../include/database/db.php');
include('./functions/filter.php');
include('./functions/query.php');
if(isset($_POST['logBtn'])){
    $filter = filter($_POST);
    $sql = "SELECT * FROM `register` WHERE `regEmail` = ? AND `regPass` = ?";
    $values = [$filter['logEmail'], $filter['logPass']];
    query($sql, $values, "ss");
}
?>