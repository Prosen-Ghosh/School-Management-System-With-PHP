<?php
include_once('../../service/mysqlcon.php');
$check=$_SESSION['login_id']; // protect your session, you should have check this valid account or not before retreving data from database
                                
if(isset(check)){
$session=mysql_query("SELECT name  FROM admin WHERE id='$check' ");
$row=mysql_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
/*if(!isset($login_session)){ // remove  this  one 
    header("Location:../../");
}*/
else
{
    header("Location:../../");
   
}
?>
