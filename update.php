<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "hyd trip";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// If form submitted → update record
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id      = $_POST['id'];
    $name    = $_POST['name'];
    $age     = $_POST['age'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];
    $desc    = $_POST['desc'];

    $sql = "UPDATE `trp` 
            SET `name`='$name', `age`='$age', `phone no`='$phone', 
                `address`='$address', `other`='$desc'
            WHERE `id`=$id";

    if (mysqli_query($con, $sql)) {
        echo "<p style='color:green;'>Record updated successfully!</p>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}

// Fetch record for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `trp` WHERE `id`=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
</head>
<body>
    <h1>Update Trip Record</h1>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <p>Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"></p>
        <p>Age: <input type="number" name="age" value="<?php echo $row['age']; ?>"></p>
        <p>Phone: <input type="text" name="phone" value="<?php echo $row['phone no']; ?>"></p>
        <p>Address: <input type="text" name="address" value="<?php echo $row['address']; ?>"></p>
        <p>Description: <textarea name="desc"><?php echo $row['other']; ?></textarea></p>
        <button type="submit">Update</button>
    </form>
    <p><a href="read.php">⬅ Back to Records</a></p>
</body>
</html>
<?php mysqli_close($con); ?>
