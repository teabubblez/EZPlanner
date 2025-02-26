<?php
    include '../connect.php';
    $conn = connect();

    $sql = "DELETE FROM group_members WHERE group_name = ? AND user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_POST["group"],  $_POST["email"]);

    $response = array();
    if ($stmt->execute()) {
        $response["success"] = "success";
    } else {
        $response["error"] = "fail";
    }

    exit(json_encode($response));
?>