<?php
$id=$_POST['id'];
$name=$_POST['name'];
$place=$_POST['place'];
$conn = new mysqli('localhost','root','','student');
if($conn->connect_error){
die('Connection failed:'.$conn->$connect_error);
} else{
$stmt=$conn->prepare("insert into loginadmin(id,name,place) values (?,?,?)");
$stmt->bind_param("sssis",$id,$name,$place);
$stmt->execute();
echo "Successful";
$stmt->close();
$conn->close();
}
?>