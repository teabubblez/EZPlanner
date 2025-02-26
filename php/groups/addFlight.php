<?php
    include '../connect.php';
    $conn = connect();

    $sql = "INSERT INTO group_flights (group_name, flight) VALUES (?, ?) ON DUPLICATE KEY UPDATE flight = VALUES(flight)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_POST["group"],  $_POST["flight"]);

    $response = array();
    if ($stmt->execute()) {
        $response["success"] = "success";
    } else {
        $response["error"] = "fail";
    }

    exit(json_encode($response));
?>