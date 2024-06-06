<?php
    include("connect.php");
    error_reporting(0);
    $query = "SELECT * FROM STUDENTDATA";
    $data = mysqli_query($con,$query);
    $total = mysqli_num_rows($data);
    
    
    if($total != 0){
    ?>
        <table>
            <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Class</th>
            </tr>

    <?php
        while($result = mysqli_fetch_assoc($data)){
            echo "<tr>
            <td>".$result['rollno']."</td>
            <td>".$result['name']."</td>
            <td>".$result['class']."</td>
        </tr>";
        }
    }else{
            echo "Table has no records";
    }
?>
</table>