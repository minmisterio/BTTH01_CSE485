<?php
include('db_connect.php');

$conn = getCon();
if (!empty($_POST["name"]) && !empty($_POST["comment"])) {
    try {
        $insertComments = "INSERT INTO comment (parent_id, comment, sender) VALUES (:commentId, :comment, :name)";
        $stmt = $conn->prepare($insertComments);

        $stmt->bindParam(':commentId', $_POST["commentId"]);
        $stmt->bindParam(':comment', $_POST["comment"]);
        $stmt->bindParam(':name', $_POST["name"]);

        $stmt->execute();

        $message = '<label class="text-success">Comment posted Successfully.</label>';
        $status = array(
            'error'  => 0,
            'message' => $message
        );
    } catch (PDOException $e) {
        $message = '<label class="text-danger">Error: Comment not posted. ' . $e->getMessage() . '</label>';
        $status = array(
            'error'  => 1,
            'message' => $message
        );
    }
} else {
    $message = '<label class="text-danger">Error: Comment not posted.</label>';
    $status = array(
        'error'  => 1,
        'message' => $message
    );
}

echo json_encode($status);
