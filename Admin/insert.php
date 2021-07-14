<?php
require 'db_connection.php';

if(isset($_POST['state']) && isset($_POST['city']) && isset($_POST['totalcase']) && isset($_POST['recovered']) && isset($_POST['deaths'])){
    
    // check username and email empty or not
    if(!empty($_POST['state']) && !empty($_POST['city'])){
        
        // Escape special characters.
        $state = mysqli_real_escape_string($conn, htmlspecialchars($_POST['state']));
        $city = mysqli_real_escape_string($conn, htmlspecialchars($_POST['city']));
        $totalcase = mysqli_real_escape_string($conn, htmlspecialchars($_POST['totalcase']));
        $recovered = mysqli_real_escape_string($conn, htmlspecialchars($_POST['recovered']));
        $deaths = mysqli_real_escape_string($conn, htmlspecialchars($_POST['deaths']));
        

        
        //CHECK EMAIL IS VALID OR NOT
        if (filter_var($city)) {
            
            // CHECK IF EMAIL IS ALREADY INSERTED OR NOT
            $check_city = mysqli_query($conn, "SELECT `city` FROM `users` WHERE city = '$city'");
            
            if(mysqli_num_rows($check_city) > 0){    
                
                echo "<h3> This City Is Already In The System </h3>";
                
            }else{
                
                // INSER USERS DATA INTO THE DATABASE
                $insert_query = mysqli_query($conn,"INSERT INTO `users`(state,city,totalcase,recovered,deaths) VALUES('$state','$city','$totalcase','$recovered','$deaths')");

                //CHECK DATA INSERTED OR NOT
                if($insert_query){
                    echo "<script>
                    alert('Data Inserted Successfully');
                    window.location.href = 'index.php';
                    </script>";
                    exit;
                }else{
                    echo "<h3> Opps something wrong! </h3>";
                }
                
                
            }
            
            
        }else{
            echo " Invalid City Name ";
        }
        
    }else{
        echo "<h4> Please Fill All Fields </h4>";
    }
    
}else{
    // set header response code
    http_response_code(404);
    echo "<h1>404 Page Not Found!</h1>";
}
?>