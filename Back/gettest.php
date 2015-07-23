
<?php
$conn = new mysqli("sql2.njit.edu", "es66", "bartok58", "es66");
$Id=$_POST["classId"];
	
$myquery = "SELECT Id, TestName FROM Test WHERE ClassId='".$Id."'";
$result = $conn->query($myquery); 
echo  "{";
while($result2 = $result->fetch_assoc())
{
	echo "{'testid':'".$result2["Id"]."','testname':'".$result2["TestName"]."'},";
	
}
echo "}"; 
?>
