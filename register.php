 <?php
require 'conn.php';


$username = $_POST["username"];
$date_job = $_POST["date_task"];
$amount   = $_POST["amount"];

echo $username;     
$sql = "INSERT INTO task (username,date_task,amount)
        VALUES ('$username','$date_job','$amount')";

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
 
