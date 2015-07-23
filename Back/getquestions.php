
<?php
$conn = new mysqli("sql2.njit.edu", "es66", "bartok58", "es66");
$Id=$_POST["questionId"];
	
$myquery = "SELECT * FROM QuestionAnswers WHERE QuestionId='".$Id."';";
$result = $conn->query($myquery); 
echo  "{";
while($result2 = $result->fetch_assoc())
{
	echo "{'Answerid':'".$result2["Id"]."','answerNumber':'".$result2["AnswerNumber"]."','answer':'".$result2["Answer"]."'},";

}
echo "}"; 
?>
