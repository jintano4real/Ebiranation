<?php
session_start();
$db= mysqli_connect("localhost", "root","","ebira-nation");
$id="";
$name="";
$email="";
$subject="";
$message="";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $sql="INSERT INTO contact (name,email,subject,message) VALUES('$name','$email','$subject','$message')";
    $query=$db->query($sql);

if($query){
    header('location:contact.php');

}
}


?>