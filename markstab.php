<!DOCTYPE html>
<html>
<head>
<style>
table {
 border-collapse: collapse;
 width: 100%;
 border: 1px solid #ddd;
 border-color:black;
}
table{
margin-right:auto;
margin-left:auto;
}
th, td {
 text-align: left;
 padding: 16px;
}
body{
background-image:
url('https://upload.wikimedia.org/wikipedia/commons/d/d8/Elegant_Background-2.jpg');
 background-size: 1540px 800px
}
p{
font-size:32px
}
a{
color:red;
text-decoration:none;
}
</style>
<br>
<p style="color:blue" align="center"><b>MARKS DETAILS</b></p>
</head>
<body class="background-image">
<br>
<br>
<br>
<table style="color:black">
 <tr>
 <th>Rollno</th>
<th>JAVA</th>
 <th>PYTHON</th>
 <th>ENGLISH</th>
<th>BIG DATA</th>
<th>Operation</th>
 </tr>
<?php
$conn= mysqli_connect('localhost','root','','student');
if($conn-> connect_error){
die("connection failed:".$conn-> connect_error);
}
 $query="SELECT * from marks";
$data= mysqli_query($conn,$query);
$total= mysqli_num_rows($data);
if($total!=0){
while($result=mysqli_fetch_assoc($data)){
echo"
<tr>
<td>".$result["id"]."</td>
<td>".$result["name"]."</td>
<td>".$result["place"]."</td>
<td>".$result["phno"]."</td>
<td>".$result["cmp"]."</td>
<td><a href='marksdelete.php?rn=$result[id]'> delete</td>
</tr>";
}
echo"</table>";
}
else{
echo"0 result";
}
$conn->close();
?>
</table>
</body>
</html>