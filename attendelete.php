<?php
$conn= mysqli_connect('localhost','root','','student');
if($conn-> connect_error){
die("connection failed:".$conn-> connect_error);
}
$id=$_GET['rn'];
$query="DELETE FROM attendance WHERE ID='$id' ";
$data=mysqli_query($conn,$query);
if($data)
{
echo"Delete sucessful";
}
else
{
echo"unsucessful";
}
?>