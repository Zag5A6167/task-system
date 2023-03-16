 <?php
require 'conn.php';

$username    = $_POST['username'];
$model_board = $_POST['model_board'];
$amount      =  $_POST['amount'];
$date_task   = $_POST['date_task'];
$send_back   = $_POST['send_back'];
$claim_back  = $_POST['claim_amount'];


echo $username;     
$sql = "INSERT INTO task (username,model_board,amount,date_task,send_back,claim_amount)
        VALUES ('$username','$model_board','$amount','$date_task','$send_back','$claim_back')";

$result = mysqli_query($conn,$sql);

if($result){

    header("location:index.php");
    exit(0);    
}
else{
 
    echo mysqli_error($conn);
}

mysqli_close($conn);    


?>
 
