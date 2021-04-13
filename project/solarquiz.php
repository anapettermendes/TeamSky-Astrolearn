
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
echo '<form action="solar_answers.php" method="post">';
echo '<fieldset>';
echo '<legend><h1>Quiz 1: THE SOLAR SYSTEM</h1></legend>';
echo '<p>1) There more that 5 planets in our solar system?</p>';
echo '<div>';
echo '<input type="radio" id="question-1-answers-yes" name="question-1-answers" value="yes">';
echo '<label for="question-1-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-1-answers-no" name="question-1-answers" value="no">';
echo '<label for="question-1-answers-no">False</label>';
echo '</div>';
echo '<p>2) Jupiter is a gas planet?</p>';
echo '<div>';
echo '<input type="radio" id="question-2-answers-yes" name="question-2-answers" value="yes">';
echo '<label for="question-2-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-2-answers-no" name="question-2-answers" value="no">';
echo '<label for="question-2-answers-no">False</label>';
echo '</div>';
echo '<p>3) All planets have a moon?</p>';
echo '<div>';
echo '<input type="radio" id="question-3-answers-yes" name="question-3-answers" value="yes">';
echo '<label for="question-3-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-3-answers-no" name="question-3-answers" value="no">';
echo '<label for="question-3-answers-no">False</label>';
echo '</div>';
echo '<p>4) Do all the planets orbit the Moon?</p>';
echo '<div>';
echo '<input type="radio" id="question-4-answers-yes" name="question-4-answers" value="yes">';
echo '<label for="question-4-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-4-answers-no" name="question-4-answers" value="no">';
echo '<label for="question-4-answers-no">False</label>';
echo '</div>';
echo '<p>5) Is there water on any other planet?</p>';
echo '<div>';
echo '<input type="radio" id="question-5-answers-yes" name="question-5-answers" value="yes">';
echo '<label for="question-5-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-5-answers-no" name="question-5-answers" value="no">';
echo '<label for="question-5-answers-no">False</label>';
echo '</div>';
echo '<br>';
echo '<button target="solar_answers.php">Submit</button>';
echo '<br>';
echo '</fieldset>';
echo '</form>';
?>


</section>

<?php include 'footer.php';?>

</body>
</html>
