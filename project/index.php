<?php include 'con_db.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Astrolearn</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" >


</head>
<body>

<?php include 'header.php'?>

  <div class="hidden-xs hidden-sm hidden-md hidden-custom videosize embed-responsive-item" autoplay="autoplay" loop="loop">
    <video poster="img\postar_Solarclip.jpg" autoplay muted loop>
      <source src="vid\Solarclip.mp4" type="video/mp4">
    </video>
  </div>


  	<div class="intro">
    <h5> Welcome to Astro-learn, the interactive learning experience. ANT IS SO COOL </h5>
    <p class="p">The E-learning website perfect for key stage 2 students, in compliance with the UK Government educational guidelines. Here you can travel through the Solar 	System, fly to the Sun but be careful not to get burnt! Explore our Universe and all its magnificent Stars, watch as they twinkle and lead you to Mars</p>
	   <p class="p"> Test your knowledge on everything you learn a make sure you come back and visit us for more educational fun…</p>

    <br>
		<!-- Trigger/Open The Modal -->
		<button id="myBtn">Explore</button>
 	  </div>

		<!-- The Modal -->
  	<div id="myModal" class="modal">
  		  <!-- Modal content -->
  		 <div class="modal-content">
          <h1>Start Your E-Learning Experience</h1>
  				<p> Navigate your journey to the Solar system, travel through the Universe and finish at discovering about Space Tech. Stop off and have a go at testing your knowledge with our quick quizzes.<p>
				<p>Click on the button below to begin your Space Travel!<p>
  		    <button><a href="solar_system.php">The Solar System</a></button>
  		</div>
      </div>

	<section>
		<div class="timeline">
			<h5> Curious Facts... </h5>
			<p class="p"> Before starting your learning experience Look through the timeline of events which lead us to Space!</p>
		<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1Rkl0jhUafXc2NCvHMys7nG65P9mJH9C6k8sg6nNigRs&font=Default&lang=en&initial_zoom=2&height=650' width='80%' height='700' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
		</div>
	</section>

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


<?php include 'footer.php';?>
</body>
</html>
