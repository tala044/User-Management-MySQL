<?php

require_once "db.php";

if (isset($_POST["id"])) {

    $id = intval($_POST["id"]);

    $sql = "UPDATE users
            SET status = CASE
                WHEN status = 0 THEN 1
                ELSE 0
            END
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->close();
}

$conn->close();

?>