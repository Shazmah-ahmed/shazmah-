<?php
include('db.php');
if(isset($_GET['login']) )
{
$name=$_GET['name'];
$my_cell=$_GET['phone_no'];
$pass=$_GET['password'];	
if($name !='' && $my_cell!=''){
	$q="INSERT INTO `dir` (`name`,`phone_no`, `password`) VALUES ('$name','$my_cell','$pass')";

  if(mysqli_query($db,$q))
  {
echo '';

  }else
  {

  	echo 'pleas try again';
  }

}
}
?>


<head>
 <style> 
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
			<tr><th> <h1 style="background-color:ash;">Login Page</h1>
			



         <form method="get" action="" > 
     

              <h3>Name</h3>
             <input type="text" name="name" value='<?php echo $_GET['name'];?>' require>
          
       <h3 >phone no</h3>
		  <input type="text" name="phone_no" require>
		   
		  <h3>password</h3>
          <input type="password" name="password" value="password" require >
		
		
		  <h3 >PHONE DIRECTORY</h3>                
           <input type="submit" name="login" value="SIGN UP"  >
           
     


		   </form>
     </th></tr>  
           </table>


</body>
</html>