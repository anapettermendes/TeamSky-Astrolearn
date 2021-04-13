
<?php include 'con_db.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Astrolearn</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" >
</head>
<body>

<section class="quiz">

		<p class="h1">Test you knowledge...</p>

<?php

echo '<form action="sun_answers.php" method="post">';
echo '<fieldset>';
echo '<legend><h1>Quiz 2: THE SUN </h1></legend>';
echo '<legend>1)Is the Sun a star?</legend>';
echo '<div>';
echo '<input type="radio" id="question-1-answers-yes" name="question-1-answers" value="yes">';
echo '<label for="question-1-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-1-answers-no" name="question-1-answers" value="no">';
echo '<label for="question-1-answers-no">False</label>';
echo '</div>';
echo '<p>2)Can we see the Sun from Earth?</p>';
echo '<div>';
echo '<input type="radio" id="question-2-answers-yes" name="question-2-answers" value="yes">';
echo '<label for="question-2-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-2-answers-no" name="question-2-answers" value="no">';
echo '<label for="question-2-answers-no">False</label>';
echo '</div>';
echo '<p>3)Is it the biggest star in our solar system?</p>';
echo '<div>';
echo '<input type="radio" id="question-3-answers-yes" name="question-3-answers" value="yes">';
echo '<label for="question-3-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-3-answers-no" name="question-3-answers" value="no">';
echo '<label for="question-3-answers-no">False</label>';
echo '</div>';
echo '<p>4)Is the Sun over 1 million years old?</p>';
echo '<div>';
echo '<input type="radio" id="question-4-answers-yes" name="question-4-answers" value="yes">';
echo '<label for="question-4-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-4-answers-no" name="question-4-answers" value="no">';
echo '<label for="question-4-answers-no">False</label>';
echo '</div>';
echo '<p>5)Does the Sun have rings around it?</p>';
echo '<div>';
echo '<input type="radio" id="question-5-answers-yes" name="question-5-answers" value="yes">';
echo '<label for="question-5-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-5-answers-no" name="question-5-answers" value="no">';
echo '<label for="question-5-answers-no">False</label>';
echo '</div>';
echo '<br>';
echo '<button target="answers.php" id="myButton">Submit</button>';
echo '<br>';
echo '</fieldset>';
echo '</form>';
?>


</section>

<?php include 'footer.php';?>

</body>
</html>
