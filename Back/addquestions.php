
<?php
 $conn = new mysqli("sql2.njit.edu", "es66", "bartok58", "es66");
//$classId=$_POST["classId"];
//$usertype=$_POST["usertype"];
$questionname=$_POST["questionName"];
$questiontype=$_POST["questionType"];
$answer=$_POST["answer"];
$weight=$_POST["weight"]; 

$json=array();
	//echo $_POST["questionName"];
	//echo $_POST["questionType"];
	//echo questiontype;
	

// questiontype 1=multiple choice, 2=true and false, 3=open end with one word length. 
if( $questiontype==1)
{
	$option1=$_POST["Opt1"];
	$option2=$_POST["Opt2"];
	$option3=$_POST["Opt3"];
	$option4=$_POST["Opt4"];
	//i will use this quesry later.
	$myquery = "INSERT INTO QuestionsBank (Question, Questiontype, Answers,Opt1,Opt2,Opt3,Opt4,Weight ) VALUES ('".$questionname."','".$questiontype."','".$answer."','".$opption1."''".$option2."''".$option3."''".$option4."','".$weight."')";
	echo $myquery
	/*$question1=$_POST["Question1"];
	$question2=$_POST["Question2"];
	$question3=$_POST["Question3"];
	$question4=$_POST["Question4"];
	*/
	
	//$myquery = "INSERT INTO Questions (Question, QuestionType) VALUES ('".$questionname."','".$questiontype."')";
//	$result=$conn->query($myquery);
	$json["message"]="success"; 
	
}

if( $questiontype==2)
{	// fix this later to add questions
	//$myquery = "INSERT INTO Questions (Question, QuestionType, Answers) VALUES ('".$questionname."','".$questiontype."','".$answer."')";
	$myquery = "INSERT INTO Questions (Question, QuestionType) VALUES ('".$questionname."','".$questiontype."')";
	//$questiont2=$_POST["Questiontype"];
	$result=$conn->query($myquery);
	$json["message"]="success";
	echo json_encode($json);
}
if( $questiontype==3)
{
	$myquery = "INSERT INTO Questions (Question, QuestionType) VALUES ('".$questionname."','".$questiontype."')";
	//$questiont2=$_POST["Questiontype"];
	$result=$conn->query($myquery);
	$json["message"]="success";
	echo json_encode($json);
	//echo "open";
}
/*
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
*/

?>
