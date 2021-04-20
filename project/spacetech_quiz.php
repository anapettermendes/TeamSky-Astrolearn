
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

echo '<form action="spacetech_answers.php" method="post">';
echo '<fieldset>';
echo '<legend><h1>Quiz 4: SPACE TECH </h1></legend>';

echo '<p>1) Astronauts only have one outfit</p>';
echo '<div>';
echo '<input type="radio" id="question-1-answers-yes" name="question-1-answers" value="yes">';
echo '<label for="question-1-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-1-answers-no" name="question-1-answers" value="no">';
echo '<label for="question-1-answers-no">False</label>';
echo '</div>';

echo '<p>2) The EVA suit is used for going on spacewalks</p>';
echo '<div>';
echo '<input type="radio" id="question-2-answers-yes" name="question-2-answers" value="yes">';
echo '<label for="question-2-answer-yes">True</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-2-answers-no" name="question-2-answers" value="no">';
echo '<label for="question-2-answers-no">False</label>';
echo '</div>';

echo '<p>3) How many layers of material is the suit made up of?</p>';
echo '<div>';
echo '<input type="radio" id="question-3-answers-14" name="question-3-answers" value="14">';
echo '<label for="question-3-answer-14">14</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-3-answers-15" name="question-3-answers" value="15">';
echo '<label for="question-3-answers-15">15</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-3-answers-16" name="question-3-answers" value="16">';
echo '<label for="question-3-answers-16">16</label>';
echo '</div>';

echo '<p>4)How do the astronauts communicate?</p>';
echo '<div>';
echo '<input type="radio" id="question-4-answers-shout" name="question-4-answers" value="shout">';
echo '<label for="question-4-answer-shout">Through Shouting loudly</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-4-answers-device" name="question-4-answers" value="device">';
echo '<label for="question-4-answers-device">Through the communication device in their helmet</label>';
echo '</div>';

echo '<p>5) The gold that is used to coat the helmets is used for</p>';
echo '<div>';
echo '<input type="radio" id="question-5-answers-protection" name="question-5-answers" value="protection">';
echo '<label for="question-5-answer-protection">Protection from the sun and to aid vision</label>';
echo '</div>';
echo '<div>';
echo '<input type="radio" id="question-5-answers-cool" name="question-5-answers" value="cool">';
echo '<label for="question-5-answers-cool">To make them look cool</label>';
echo '</div>';
echo '<br>';

echo '<button target="spacetech_answers.php">Submit</button>';
echo '<br>';
echo '</fieldset>';
echo '</form>';
?>


</section>

<?php include 'footer.php';?>

</body>
</html>
