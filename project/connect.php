<?php
$Name= $_POST['Name'];
$mobile= $_POST['mobile'];
$ID= $_POST['ID'];
$email= $_POST['email'];
$password= $_POST['password'];
$confirm_password= $_POST['confirm_password'];

$conn = new mysqli ('localhost','root','','test');
if($conn ->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert info registration(Name,Mobile,ID,email,password,confirm_password")
    values(?, ?, ?,  ?, ?, ?);
    $stmt->bind_param("ssssss",$Name,$mobile,$ID,$password,$confirm_password);
    $stmt->execute();
    echo"registration succesfully...";
    $stmt->close();
    $conn->close();

}

?>