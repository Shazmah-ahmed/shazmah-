<?php
include('db.php');
if(isset($_GET['del']) && $_GET['del'] != ''){
$del_id= $_GET['del'];
$q="DELETE FROM dir WHERE id=$del_id";
$runquery=mysqli_query($db,$q);
}

$q='SELECT * from `dir` limit 20';

$runquery=mysqli_query($db,$q);
?>
<table border="5"style=" align center " width="50%;">
<h1>Directory</h1>

<?php  
while($row=mysqli_fetch_assoc($runquery))
{
	$id= $row['id'];
$name= $row['name'];
$phone= $row['phone_no'];

echo "<tr><td>$name</td><td>$phone</td><td><a href='?del=$id'>delete</a></td><td><a href='update.php?id=$id'>update</a></td></tr>";


}


?>
<html>
	<head><style>
	body  {
     background-image: url("paper.gif");
      background-color:lightpink;
}

</style></head>
</html>