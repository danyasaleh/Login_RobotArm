<?php



// create connection
$conn = new mysqli("localhost","root","","Project1");

   
$User=$_POST['usernamee'];
$Password=$_POST['password'];
    
// create the query statment 

$query="SELECT * FROM login where username='$User' and password='$Password'";
$result =mysqli_query($conn,$query);

$count= mysqli_num_rows($result);

if($count >0){
    header('Location: Robot_Arm.html');
    exit;
} else{
    echo"username or password is wrong!!";
}


// execute the query
//$stat->execute();

    

// close the statment and the connection
$result->close();
$conn->close(); 

?>