<?php
require 'db_connection.php';
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $get_user = mysqli_query($conn,"SELECT * FROM `users` WHERE id='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $row = mysqli_fetch_assoc($get_user);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Covid-19 Tracker || Update Data </title>
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="logo.png"/>

</head>

<body>
     <div class="container">
      
       
        <div class="form">
            <h2> Update Data </h2><br>

            <form action="" method="post">

                <strong> State Name </strong><br>
                <input type="text" autocomplete="off" name="state" value="<?php echo $row['state'];?>" required><br><br>

                <strong> City </strong><br>
                <input type="text" autocomplete="off" name="city" value="<?php echo $row['city'];?>" required><br><br>

                <strong> Total Cases </strong><br>
                <input type="text" autocomplete="off" name="totalcase" value="<?php echo $row['totalcase'];?>" required><br><br>

                <strong> Recovered </strong><br>
                <input type="text" autocomplete="off" name="recovered" value="<?php echo $row['recovered'];?>" required><br><br>

                <strong> Deaths </strong><br>
                <input type="text" autocomplete="off" name="deaths" value="<?php echo $row['deaths'];?>" required><br><br>

                <center><input type="submit" value="Update"><center>
            </form>
        </div>
        
    </div>
</body>
</html>
<?php

    }else{
        // set header response code
        http_response_code(404);
        echo "<h1> ERROR 404  </h1>";
    }
    
}else{
    // set header response code
    http_response_code(404);
    echo "<h1> ERROR 404 </h1>";
}


/* ---------------------------------------------------------------------------
------------------------------------------------------------------------------ */


// UPDATING DATA

if(isset($_POST['state']) && isset($_POST['city']) && isset($_POST['totalcase']) && isset($_POST['recovered']) && isset($_POST['deaths'])){
    
    if(!empty($_POST['state']) && !empty($_POST['city'])){
        
      
        $state = mysqli_real_escape_string($conn, htmlspecialchars($_POST['state']));
        $city = mysqli_real_escape_string($conn, htmlspecialchars($_POST['city']));
        $totalcase = mysqli_real_escape_string($conn, htmlspecialchars($_POST['totalcase']));
        $recovered = mysqli_real_escape_string($conn, htmlspecialchars($_POST['recovered']));
        $deaths = mysqli_real_escape_string($conn, htmlspecialchars($_POST['deaths']));
        
        
        if (filter_var($city)) {
            $user_id = $_GET['id'];
            // CHECK IF EMAIL IS ALREADY INSERTED OR NOT
            $check_city = mysqli_query($conn, "SELECT `city` FROM `users` WHERE city = '$city' AND id != '$user_id'");
            
            if(mysqli_num_rows($check_city) > 0){    
                
                echo "<h3> This City Is Already In The System </h3>";
                
                
            }else{
                
                            
                $update_query = mysqli_query($conn,"UPDATE `users` SET state='$state',city='$city', recovered='$recovered', totalcase='$totalcase', deaths='$deaths' WHERE id=$user_id");

                //CHECK DATA UPDATED OR NOT
                if($update_query){
                    echo "<script>
                    alert(' Data Updated Successfully');
                    window.location.href = 'index.php';
                    </script>";
                    exit;
                }
                else
                {
                    echo "<h3>Opps something wrong!</h3>";
                }
           
                
                
            }
            
            
        }else{
            echo " Invalid City Name ";
        }
        
    }else{
        echo "<h4> Please fill All Fields </h4>";
    }
    
}

// END OF UPDATING DATA

?>

