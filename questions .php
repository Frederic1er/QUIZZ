<!DOCTYPE html>

<html>

<head>
	<meta charset=UTF-8" />
	
	<title>Quizz time !!</title>
	
	<link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Result</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer5 = $_POST['question-5-answers'];

        
            $totalCorrect = 0;
            
            if ($answer1 == "") { $totalCorrect++; }
            if ($answer2 == "") { $totalCorrect++; }
            if ($answer3 == "") { $totalCorrect++; }
            if ($answer4 == "") { $totalCorrect++; }
            if ($answer5 == "") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
            
        ?>
	
	</div>

</body>

</html>