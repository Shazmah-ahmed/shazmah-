<?php
include('db.php');
$id= $_GET['id'];
if(isset($_GET['update'])){
$name=$_GET['name'];
$phone=$_GET['phone_no'];
$pass=$_GET['password'];

$query="UPDATE `dir` SET name='$name' , phone_no='$phone' WHERE id=$id";

$run=mysqli_query($db,$query);

header('location:directory.php');



}




$query="SELECT * FROM `dir` WHERE id=$id";
$run=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($run);
if(count($row) < 1){
//header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head><style> 
     form{
        padding-top: 10PX;
       text-align: center;
   font-size: 10px;}
   input{
   width: 200px;
 height: 30px;
   font-size: 10px;}

    body  {
     background-image: url("paper.gif");
      background-color:powderblue;
     }
 </style>
     </head>
       <table style=" align center " width="100%;">
       <tr>


            </tr></table><br>
         <table style=" align center " width="100%;">
			<tr><th> <h1 style="background-color:ash;">update</h1>
<body>
<form method="get" action="">
	<h3>name</h3>
	 <input type="text" name="name" value='<?php echo $row['name'];?>'>
	<br />
	<h3>phone</h3>
	 <input type="text" value='<?php echo $row['phone_no'];?>' name="phone_no">
	<br />
	<h3>password</h3> 
	<input type="text" value="<?php echo $row['password'];?>" name="password"><br/><br/>



	<input type="hidden" value="<?php echo $row['id'];?>" name="id">
	<br /><br/>
	<input type="submit" name="update" value="update">

    </th></tr>  
           </table>

</form>
</body>
</html>
