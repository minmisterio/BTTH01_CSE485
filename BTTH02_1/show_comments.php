<?php
include_once("db_connect.php");
$conn = getCon();
$commentQuery = "SELECT id, parent_id, comment, sender, date FROM comment WHERE parent_id = '0' ORDER BY id DESC";
$commentsResult = $conn->prepare($commentQuery);
$commentsResult->execute();
$commentHTML = '';

function getCommentReply(PDO $conn)
{
    $replyQuery = "SELECT id, parent_id, comment, sender, date FROM comment WHERE parent_id = :parent_id ORDER BY id DESC";
    $stmt = $conn->prepare($replyQuery);
    $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
    $stmt->execute();

    $replyHTML = '';
    while ($reply = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $replyHTML .= '
            <div class="panel panel-info ml-4">
                <div class="panel-heading">By <b>' . $reply["sender"] . '</b> on <i>' . $reply["date"] . '</i></div>
                <div class="panel-body">' . $reply["comment"] . '</div>
            </div>';
        $replyHTML .= getCommentReply($conn, $reply["id"]);
    }

    return $replyHTML;
}

while ($comment = $commentsResult->fetch(PDO::FETCH_ASSOC)) {
    $commentHTML .= '
        <div class="panel panel-primary">
        <div class="panel-heading">By <b>' . $comment["sender"] . '</b> on <i>' . $comment["date"] . '</i></div>
        <div class="panel-body">' . $comment["comment"] . '</div>
        <div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="' . $comment["id"] . '">Reply</button></div>
        </div> ';
    $commentHTML .= getCommentReply($conn, $comment["id"]);
}
echo $commentHTML;
