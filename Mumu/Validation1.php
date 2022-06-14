<?php

$Name="";
$NameError="";
if ($SERVER['REQUEST_METHOD']=="POST"
{
	$Name=$_POST['name'];
}

if($name==null)
{$_SESSION["Name"]=$Name;}
else{$NameError="Validation Error";}


?>