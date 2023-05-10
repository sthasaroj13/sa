
<?php

// if(isset($_POST)){
    $username = $_POST['username'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $type= $_POST['type'];
    
// }


$con =new mysqli('localhost','root','','','wecare');
if($con->connect_error){
    die('connection failed :'.$con->connection_error);

} 
else{
    $sql ="insert into register (`username`,`email`,`phone`,`type`) valuses('$username','$email','$phone','$type')";
    $reult =mysqli_query($con,$sql);
    if($reult){
        echo "sucess";
    }
    else{
        echo "fail";
    }
    

}



?>