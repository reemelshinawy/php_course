<?php

include"db.php";
$dp=new db;
echo"<pre>";
$user=[

"name"->"reem",
"email"->"reem",
"password"->"123"

];

$db->insert ("user",$user)->execute();


print_r($db->select("user","*")->where("id","=",9)->GetALL());