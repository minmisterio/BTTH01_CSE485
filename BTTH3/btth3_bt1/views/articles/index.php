<!DOCTYPE html>
<html>
<head>
    <title>Article List</title>
</head>
<body>
    <h1>Article List</h1>

    <a href="index.php?controller=article&action=create">Create Article</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?php echo $article['id']; ?></td>
                    <td><?php echo $article['title']; ?></td>
                    <td>
                        <a href="index.php?controller=article&action=edit&id=<?php echo $article['id']; ?>">Edit</a>
                        <a href="index.php?controller=article&action=delete&id=<?php echo $article['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
