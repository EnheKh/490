
<?php
$conn = new mysqli("sql2.njit.edu", "es66", "bartok58", "es66");
$classId=$_POST["classId"];
$usertype=$_POST["usertype"];
$questionname=$_POST["questionName"];
$questiontype=$_POST["Questiontype"];

// questiontype 1=multiple choice, 2=true and false, 3=open end with one word length. 
if( $questiontype==1)
{
	$question1=$_POST["Question1"];
	$question2=$_POST["Question2"];
	$question3=$_POST["Question3"];
	$question4=$_POST["Question4"];
}
if( $questiontype==2)
{
	//$questiont2=$_POST["Questiontype"];
	
}
if( $questiontype==3)
{
	
}
$questionanswer = $_POST["questionanswer"];

if($usertype == 1)
{
	$myquery = "INSERT INTO Questions (ClassId, Question, QuestionType) VALUES ('".$classId."','".$questionname."','".$questiontype."')";
	$result = $conn->query($myquery); 
	$myquery = "SELECT Id, COUNT(*) as mycount FROM Questions WHERE ClassId='".$classId."' and Question='".$questionname."';";
	$result = $conn->query($myquery);
	$result = $result->fetch_assoc();
	$qid=0;
	if($result["mycount"]==1)
	{
		$qid = $result["Id"];
		if($questiontype == 1)
		{
			$myquery = "INSERT INTO QuestionAnswers (QuestionId, Answers, AnswerNumber, AnswerCorrect) VALUES ('".$qid."','".$question1."','1','".$questionanswer."')";
			$result = $conn->query($myquery);
			$myquery = "INSERT INTO QuestionAnswers (QuestionId, Answers, AnswerNumber, AnswerCorrect) VALUES ('".$qid."','".$question2."','2','".$questionanswer."')";
			$result = $conn->query($myquery);
			$myquery = "INSERT INTO QuestionAnswers (QuestionId, Answers, AnswerNumber, AnswerCorrect) VALUES ('".$qid."','".$question3."','3','".$questionanswer."')";
			$result = $conn->query($myquery);
			$myquery = "INSERT INTO QuestionAnswers (QuestionId, Answers, AnswerNumber, AnswerCorrect) VALUES ('".$qid."','".$question4."','4','".$questionanswer."')";
			$result = $conn->query($myquery);
		}
		if($questiontype == 2 || $questiontype == 3)
		{
			$myquery = "INSERT INTO QuestionAnswers (QuestionId, AnswerCorrect) VALUES ('".$qid."','".$questionanswer."')";
			$result = $conn->query($myquery);
		}
	}
}



	/*
echo  "{";
{
while($result2 = $result->fetch_assoc())
	echo "{'testid':'".$result2["Id"]."','testname':'".$result2["TestName"]."'},";
	
}
echo "}"; 
//*/
?>
