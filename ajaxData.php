<?php 
// Include the database config file 
include_once 'config.php'; 
 
if(!empty($_POST["country_id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC"; 
    $result1 = mysqli_query($con,$query);	
     
    // Generate HTML of state options list 
    if(mysqli_num_rows($result1)){ 
        echo '<option value="">Select State</option>'; 
        while($row = mysqli_fetch_array($result1)) {
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">State not available</option>'; 
    } 
}elseif(!empty($_POST["state_id"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM districts WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY district_name ASC"; 
    $result2 = mysqli_query($con,$query); 
     
    // Generate HTML of city options list 
    //if(mysqli_num_rows($result)){ 
        echo '<option value="">Select District</option>'; 
        while($row = mysqli_fetch_array($result2)) {  
            echo '<option value="'.$row['id'].'">'.$row['district_name'].'</option>'; 
        } 
    // }else{ 
    //     echo '<option value="">City not available</option>'; 
    // } 
}  
?>