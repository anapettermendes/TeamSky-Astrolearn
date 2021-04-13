
<?php include 'con_db.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Astrolearn</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">

<head>
<?php include 'header.php'?>
</head>

<body>

<div class="swf2">
<h1>Results</h1>
<?php
$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];

$totalCorrect = 0;

if ($answer1 == "yes") { $totalCorrect++; }
if ($answer2 == "yes") { $totalCorrect++; }
if ($answer3 == "no") { $totalCorrect++; }
if ($answer4 == "no") { $totalCorrect++; }
if ($answer5 == "yes") { $totalCorrect++; }

echo "<div id='results'>$totalCorrect / 5 correct</div>";
?>

<br>

<p>Didn't get the result you want? Why not re-take the quiz by clicking the 'Try again' button</p>
<a href="solar_system.php"><button>Try Again</button></a>
  <br><br>
<p>To proceed to the next section please click the 'Next opic' button below.</p>
<button id="myBtn">Next Topic</button>


<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
   <div class="modal-content">
      <h1>You have completed your First Topic</h1>
      <p> Now navigate your journey to the Sun, its going to be super fun.<p>
    <p>Click on the button below to continue your Space Travel!<p>
      <button><a href="sun.php">Sun</a></button>
  </div>
  </div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<br>

<?php include 'footer.php';?>

</body>

</html>
