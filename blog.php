<?php
// Database connection
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "saraswatipujablog";
$conn = new mysqli($localhost, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Post</title>
    <style>
        
        .top-section {
            height: 7vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(255, 215, 0, 0.3);
    width: 82%;
    border-radius: 25px;
        }
        .top-section button {
               font-size: 14px;
    cursor: pointer;
    width: auto;
    border-radius: 25px;
        }
        .top-section p{
            margin: auto;
        }
        .container {
            padding: 20px;
        }
        .posts-section {
        margin-top: 20px;
        max-height: 76vh; /* Adjust height to control the visible area */
        overflow-y: auto; /* Enable vertical scrolling */
        border: 1px solid darkgoldenrod; /* Optional: Adds a border for better visibility */
        padding: 10px; /* Add padding inside the scrollable area */
        background-color: goldenrod; /* Optional: Light background for contrast */
        border-radius: 8px; /* Rounded corners for aesthetics */
    }
        .post-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .post-card img {
            max-width: 100%;
            height: auto;
        }
        .post-content {
            margin-top: 10px;
            text-align: center;
        }
        .post-actions {
            margin-top: 10px;
        }
        .post-actions button {
            margin: 0 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <center>
    <div class="top-section">
        <p>Do you want to share a post?</p>
        <button onclick="window.location.href='create_post.php'" class="new-post-btn">Share a Post</button>
    </div>
    </center>
        
        <div class="posts-section">
            <?php if ($result->num_rows > 0) : ?>
                
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <div class="post-card">
                        <img src="blog/<?= htmlspecialchars($row['image']) ?>" alt="Post Image">
                        <div class="post-content">
                            <p class="post-comment"><?= htmlspecialchars($row['comment']) ?></p>
                            <div class="post-actions">
                                <button class="like-btn">Like</button>
                                <button class="share-btn">Share</button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts available. Be the first to share a post!</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
