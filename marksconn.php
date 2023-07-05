<?php
$id=$_POST['id'];
$name=$_POST['name'];
$place=$_POST['place'];
$phno=$_POST['phno'];
$cmp=$_POST['cmp'];
$conn = new mysqli('localhost','root','','student');
if($conn->connect_error){
die('Connection failed:'.$conn->$connect_error);
} else{
$stmt=$conn->prepare("insert into marks(id,name,place,phno,cmp) values (?,?,?,?,?)");
$stmt->bind_param("sssis",$id,$name,$place,$phno,$cmp);
$stmt->execute();
echo "Successful";
$stmt->close();
$conn->close();
}
?>