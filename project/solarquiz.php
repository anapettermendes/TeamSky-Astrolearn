
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
echo '<p>1) Which planet is the closest to the sun?</p>';
echo '<div>';
echo '<input type="radio" id="question-1-answers-earth" name="question-1-answers" value="earth">';
echo '<label for="question-1-answer-earth">Earth</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-1-answers-Neptune" name="question-1-answers" value="neptune">';
echo '<label for="question-1-answers-neptune">Neptune</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-1-answers-mercury" name="question-1-answers" value="mercury">';
echo '<label for="question-1-answers-mercury">Mercury</label>';
echo '</div>';

echo '<p>2) How old is the estimated age of venus?</p>';
echo '<div>';
echo '<input type="radio" id="question-2-answers-onemillion" name="question-2-answers" value="onemillion">';
echo '<label for="question-2-answer-onemillion">100-200 Million years old</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-2-answers-threemillion" name="question-2-answers" value="3threemillion">';
echo '<label for="question-2-answers-threemillion">300-400million years old</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-2-answers-fourmillion" name="question-2-answers" value="fourmillion">';
echo '<label for="question-2-answers-fourmillion">400-500million years old</label>';
echo '</div>';

echo '<p>3) How many moons does mars have?</p>';
echo '<div>';
echo '<input type="radio" id="question-3-answers-one" name="question-3-answers" value="one">';
echo '<label for="question-3-answer-one">1</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-3-answers-two" name="question-3-answers" value="two">';
echo '<label for="question-3-answers-two">2</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-3-answers-three" name="question-3-answers" value="three">';
echo '<label for="question-3-answers-three">3</label>';
echo '</div>';

echo '<p>4) Which is the largest planet?</p>';
echo '<div>';
echo '<input type="radio" id="question-4-answers-mars" name="question-4-answers" value="mars">';
echo '<label for="question-4-answer-mars">Mars</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-4-answers-saturn" name="question-4-answers" value="saturn">';
echo '<label for="question-4-answers-saturn">Saturn</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-4-answers-jupiter" name="question-4-answers" value="jupiter">';
echo '<label for="question-4-answers-jupiter">Jupiter</label>';
echo '</div>';

echo '<p>5) It takes 84 earth days for Uranus to orbit the sun once</p>';
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
