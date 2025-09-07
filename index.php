<?php
$insert = false;
if (isset($_POST['name'])) {
    //set connection variables
    $insert = true;
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully to db ";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $Discription = $_POST['Discription'];
    $date = date("Y-m-d H:i:s");
    //$yt = $_POST['yt'];

    $sql= "INSERT INTO `hyd trip` . `trp` ( `name`, `age`, `phone no`, `address`, `other`, `date`) VALUES ( '$name', '$age', '$phone', '$address', '$Discription', current_timestamp())";
    //echo $sql;

    if ($con->query($sql) === TRUE) {
        echo "<p style='color:green;'>New post created successfully!</p>";
       $insert = true;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;

    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome To travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src ="bg.jpg" alt ="Rit Collage" class="bg">   
    <div class="container">
        <h1>Welcome Budes of Rit .. its a Form for HYD trip</h1>
        <p>Please fill out the form below to book your trip.</p><link rel="preconnect" href="https://fonts.googleapis.com">
       
        <?php
           echo "<P class=\"submitmsg\">Thank you for Subminting The form . i'm happy to see you there Budes </P>";
        ?>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mozilla+Headline:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name" >
            <input type="text" name="age" id="age" placeholder="Enter your age" >
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number" >
            <input type="text" name="address" id="address" placeholder="Enter your address" >
            <textarea name="Discription" id="desc" placeholder="Enter your description"></textarea>

            <button type="btn" class="btn">Submit</button>

  <p><a href="read.php" class="link-color">View Submitted Records</a></p>
        </form>
        
    </div>
    <script src="index.js"></script>
</body>
</html>