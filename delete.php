<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "hyd trip";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `trp` WHERE `id`=$id";

    if (mysqli_query($con, $sql)) {
        echo "<p style='color:red;'>Record deleted successfully!</p>";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
?>
<p><a href="read.php">⬅ Back to Records</a></p>
<?php mysqli_close($con); ?>
