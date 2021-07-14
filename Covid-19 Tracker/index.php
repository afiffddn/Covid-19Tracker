<?php
require 'db_connection.php';

function get_all_data($conn){
    $get_data = mysqli_query($conn,"SELECT * FROM `users`");
    if(mysqli_num_rows($get_data) > 0){
        echo '<table>
              <tr>
                <th> State </th>
                <th> City </th> 
                <th> Total Cases </th>
                <th> Recovered </th>
                <th> Death </th>
                <th> Action </th> 
              </tr>';
        while($row = mysqli_fetch_assoc($get_data)){
           
            echo '<tr>
            <td>'.$row['state'].'</td>
            <td>'.$row['city'].'</td>
            <td>'.$row['totalcase'].'</td>
            <td>'.$row['recovered'].'</td>
            <td>'.$row['deaths'].'</td>
            <td>
            <a href="update.php?id='.$row['id'].'"> Edit </a>&nbsp;|
            <a href="delete.php?id='.$row['id'].'"> Delete </a>
            </td>
            </tr>';

        }
        echo '</table>';
    }else{
        echo "<h3> There Is No Record To Be Found </h3>";
    }
}
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Covid-19 Tracker || Admin </title>
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="logo.png"/>

</head>

<body>
    <div class="container">

        <div class="form">
            <h2> Insert Data </h2><br>
            <form action="insert.php" method="post">
                <strong> State Name </strong>
                <input type="text" name="state" required><br><br>
                <strong> City </strong>
                <input type="text" name="city" required><br><br>
                 <strong> Total Cases </strong>
                <input type="text" name="totalcase" required><br><br>
                 <strong> Recovered Cases </strong>
                <input type="text" name="recovered" required><br><br>
                 <strong> Death Tolls </strong>
                <input type="text" name="deaths" required><br><br>
                
                <center><input type="submit" value="Insert"></center> <br>
            </form>
        </div>
    
        <hr>
        <br>
        
        <h2> View Data </h2> <br>

        <?php 
        get_all_data($conn); 
        ?>
        <br>
    </div>
    <br>

    <center><input type="submit" value=" Log Out "></center>
</body>

</html>