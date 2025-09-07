<?php
// Database connection
$servername = "localhost";
$username = "root";   // your MySQL username
$password = "";       // your MySQL password
$dbname = "blog";     // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insert into database
    $sql = "INSERT INTO posts (title, content, created_at) VALUES ('$title', '$content', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>New post created successfully!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h2>Create New Post</h2>
    <form method="POST" action="">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="5" cols="40" required></textarea><br><br>

        <input type="submit" value="Add Post">
    </form>
</body>
</html>
