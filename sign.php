<?php
$con=mysqli_connect('localhost8080','root');




if($con){
    echo "successfull";
}






mysqli_select_db($con,'ham_kisaan');
$name=$_POST['name'];
$fathername=$_POST['father_name'];
$vname=$_POST['village'];
$bname=$_POST['block'];
$dname=$_POST['district'];
$sname=$_POST['state'];
$user=$_POST['user_name'];
$pass=$_POST['password'];
$phone=$_POST['phone'];






$query="insert into user_info(name,fname,phone,village,block,district,state,user_name,password,password)
values ('$name','$fathername','$phone','$vname','$bname','$dname','$sname','$user','$pass')";
mysqli_query($con,$query);
?>