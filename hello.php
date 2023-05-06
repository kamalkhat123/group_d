<?php
session_start();

$connection=mysqli_connect('localhost:3307','root','');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'loginandregistrationform');

$email=$_POST['emailid'];
$password=$_POST['password'];

$select="select * from register_table where email_id='$email' && password='$password'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    header('location:app.php');
}
else
{
    header('location:loginandregister.php');
}
?>

<?php

session_start();
session_destroy();

header('location:loginandregister.php');

?>

create database loginandregistrationform;
use loginandregistrationform;
create table register_table(name varchar(30),email_id varchar(50) primary key,password varchar(20));