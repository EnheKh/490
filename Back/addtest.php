
<?php
$conn = new mysqli("sql2.njit.edu", "es66", "bartok58", "es66");
$classId=$_POST["classId"];
$usertype=$_POST["usertype"];
$testname=$_POST["testname"];
if($usertype == 1)
{
	$myquery = "INSERT INTO Test (ClassId, TestName) VALUES ('".$classId."','".$testname."')";
	$result = $conn->query($myquery); 
}
	/*
echo  "{";
while($result2 = $result->fetch_assoc())
{
	echo "{'testid':'".$result2["Id"]."','testname':'".$result2["TestName"]."'},";
	
}
echo "}"; 
//*/
?>
