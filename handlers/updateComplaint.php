<?php

    function updateStatus
    if ($_POST) {
        $data = $_POST['adminRemark'];
        echo "name is:" . $data;
    }

    if (isset($_POST)) {
        echo "hello there";
    }
    if (isset($_POST["adminRemark"])) {
        echo "data found;";
    }

?>

<!-- <td class='solveStatus' id='solveStatus'>Not Solved</td> -->
