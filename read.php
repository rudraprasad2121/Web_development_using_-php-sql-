


<?php
// Database connection
$server = "localhost";
$username = "root";
$password = "";
$database = "hyd trip";   // database name

$con = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all records
$sql = "SELECT * FROM `trp` ORDER BY date DESC";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Trips</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 60%; border-collapse: collapse; margin-top: 30px; }
        th, td { border: 2px solid #999; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
        h1 { text-align: center; }
    </style>
</head>
<body>
    <h1>Submitted Trip Registrations</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Address</th>
            <!-- <th>Description</th> -->
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['phone no'] . "</td>";
                echo "<td>" . htmlspecialchars($row['address']) . "</td>";
            //    echo "<td>" . htmlspecialchars($row['Discription']) . "</td>"; 
               echo "<td>" . $row['date'] . "</td>"; 
                echo "<td>
                        <a href='update.php?id=" . $row['id'] . "'>Edit</a> | 
                        <a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure?');\">Delete</a>
                     </td>";
                     
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        ?>
    </table>

    <p style="text-align:center; margin-top:20px;">
        <a href="index.php">⬅ Back to Form</a>
    </p>
</body>
</html>

<?php mysqli_close($con); ?>


