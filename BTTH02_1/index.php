<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Example: Comment System with Ajax, PHP & MySQL</h2>
        <form method="POST" id="commentForm">
            <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
            </div>
            <div class="form-group">
                <textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
            </div>
            <span id="message"></span>
            <div class="form-group">
                <input type="hidden" name="commentId" id="commentId" value="0" />
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
            </div>
        </form>
        <div id="showComments"></div>
    </div>
</body>
<script src="./comments.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>