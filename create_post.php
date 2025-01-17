<?php
// Database connection
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "saraswatipujablog";

$conn = new mysqli($localhost, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = $conn->real_escape_string($_POST['comment']);
    $imageName = $_FILES['image']['name'];
    $targetDir = "blog/";

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Save image in the blog folder
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $imageName)) {
        // Insert post data into the database
        $stmt = $conn->prepare("INSERT INTO posts (image, comment) VALUES (?, ?)");
        $stmt->bind_param("ss", $imageName, $comment);
        $stmt->execute();
        $successMessage = "Post saved successfully!";
        header("Location: index.php");
    } else {
        $errorMessage = "Failed to upload the image.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-section {
            margin-bottom: 20px;
        }
        .form-section input[type="file"],
        .form-section textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-section button {
            padding: 10px 20px;
            background-color: #008cba;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .preview-section {
            margin-top: 20px;
        }
        .post-card {
            padding: 10px;
            border: 1px solid #ddd;
            margin-top: 10px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .post-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .post-content {
            margin-top: 10px;
            text-align: center;
        }
        .post-actions {
            margin-top: 10px;
        }
        .post-actions button {
            padding: 5px 10px;
            margin: 0 5px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #ddd;
        }
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            .form-section button {
                width: 100%;
            }
        }
    </style>
    <script>
        function previewPost() {
            const imageInput = document.getElementById('imageInput');
            const textInput = document.getElementById('textInput');
            const previewImage = document.getElementById('previewImage');
            const previewText = document.getElementById('previewText');

            if (imageInput.files && imageInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                };
                reader.readAsDataURL(imageInput.files[0]);
            }
            previewText.textContent = textInput.value;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Create a Post</h1>
        <?php if (!empty($successMessage)) : ?>
            <p style="color: green;"><?= htmlspecialchars($successMessage) ?></p>
        <?php elseif (!empty($errorMessage)) : ?>
            <p style="color: red;"><?= htmlspecialchars($errorMessage) ?></p>
        <?php endif; ?>
        <form action="create_post.php" method="POST" enctype="multipart/form-data" class="form-section">
            <input type="file" name="image" id="imageInput" required onchange="previewPost()">
            <textarea name="comment" id="textInput" rows="3" placeholder="Enter your comment" required oninput="previewPost()"></textarea>
            <button type="submit">Post</button>
        </form>
        <div class="preview-section">
            <h2>Preview</h2>
            <div class="post-card">
                <img id="previewImage" style="display: none; max-width: 100%; height: auto;" alt="Preview Image">
                <div class="post-content">
                    <p id="previewText">Your text will appear here...</p>
                </div>
                <div class="post-actions">
                    <button class="like-btn">Like</button>
                    <button class="share-btn">Share</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
