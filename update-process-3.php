<?php
session_start();
include("db.php");

if(isset($_SESSION['username']))
{
if ($_POST['submit'] && $_POST['id']) {
  if ($_POST['submit'] == 'Save') {
    // edit the post with $_POST['id']

    $current_user = $_SESSION['userid'];
    if($conn)
    {
    	if(!empty($_POST['first_name'] && $_POST['last_name'] && $_POST['city_name'] && $_POST['email']))
    	{
    	$sql = "UPDATE employee SET  userid ='".$_POST['userid']."' , first_name ='".$_POST['first_name']."' , last_name = '".$_POST['last_name']."' , city_name = '".$_POST['city_name']."' , email = '".$_POST['email']."' limit 1";
          
            if (mysqli_query($conn, $sql))   
            {
            	echo "<script>window.alert('Succesfully update account !')</script>";
    	 		echo ("<script type='text/javascript'>window.location.href = 'update.php'</script>");
            }
            else
            	echo "<script>window.alert('Failed !')</script>";
    			echo ("<script type='text/javascript'>window.location.href = 'update.php'</script>");
    	}
    			else
            	echo "<script>window.alert('Failed update account !')</script>";
    			echo ("<script type='text/javascript'>window.location.href = 'update.php'</script>");
     }

 }}}

?>