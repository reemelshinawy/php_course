<?php
$con=mysqli_connect("localhost","root","","oop");
$q=mysqli_query($con,"SELECT * FROM user");

$all=[];
while($d=mysqli_fetch_assoc($q)){

    $all[]=$d;
}

$con=mysqli_connect("localhost","root","","oop");
$q=mysqli_query($con,"SELECT * FROM user");

$all=[];
while($d=$q->mysqli_fetch_assoc()){

    $all[]=$d;
}
echo'<pre>';
print_r($all);