<?php

    $conn = mysqli_connect("localhost","root","","wad_project3");

    $result = mysqli_query($conn,"SELECT * FROM students");
// $data = mysqli_fetch_object ($result); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Table</title>
</head>
<body>
    <hi> WAD PROJECT 3</hi>
    <table border = 1>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>NIM</th>
                <th>ADDRESS</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_object($result) )  {
                ?>
            <tr>
                <td><?php echo $data -> id;?></td>
                <td><?php echo $data -> name;?></td>
                <td><?php echo $data -> nim;?></td>
                <td><?php echo $data -> address; ?></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>