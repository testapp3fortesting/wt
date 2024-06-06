<?php
    include("connect.php");
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert values in databse</title>
</head>
<body>

    <form action="" method="GET">
        Roll No <input type="text" name="rollno" values=""><br><br>
        Name <input type="text" name="studentname" values=""><br><br>
        Class <input type="text" name="class" values=""><br><br>
        <input type="submit" name = "submit" values= "Submit">
    </form>

    <?php
    if ($_GET['submit']) {
    $rn = $_GET['rollno'];
    $nm = $_GET['studentname'];
    $cl = $_GET['class'];

    // **Combine conditions:**
    if (!empty($rn) && !empty($nm) && !empty($cl)) { // Use empty() for stricter check
        $query = "INSERT INTO STUDENTDATA VALUES('$rn', '$nm', '$cl')";
        $data = mysqli_query($con, $query);

        if ($data) {
            echo "Data inserted Successfully";}
        // } else {
        //     echo "Error inserting data: " . mysqli_error($con); // Handle insertion error
        // }
    } else {
        echo "All fields are required";
    }
}
?>

</body>
</html>