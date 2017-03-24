<?php
include 'includes/header.php';
require 'connection/connection.php';
include 'fpdf/fpdf.php';

$sql = "SELECT * FROM exitsurvey_answers ORDER BY id DESC";
$result = $conn->query($sql);

?>

<!-- Add back in version 2
<ul id="slide-out" class="side-nav fixed">
      <li><a href="#!">Individual Results</a></li>
      <li><a href="#!">By Location Results</a></li>
      <li><a href="#!">By Job Title</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
Add back in version 2 -->

<nav>
	<div class="nav-wrapper green darken-4">
		<a href="#" class="brand-logo center">Individual Survey Results</a>
	</div>
</nav>



<main>
	<div class="container">

	<p>This is where you can view individual survey submission. To view a participants answers, click the bar with their information and the results will drop down.</p>
	
		<ul class="collapsible" data-collapsible="accordion">


		<?php if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
        ?>

        
			<li>
				<div class="collapsible-header row">
					<div class="col s4"><i class="material-icons">person_pin</i>
					<?php echo $row["first_name"] . ' ' . $row["last_name"];?></div>
					<div class="col s4"><i class="material-icons">room</i>
					<?php echo $row["location"]; ?></div>
					<div class="col s4"><i class="material-icons">av_timer</i>
						<?php
							$db = $row["date"];
							$timestamp = strtotime($db);
							echo date("m-d-y", $timestamp);
						?>
					</div>
				</div>
				<div class="collapsible-body">
					<span>
						<p><strong>Job Title: </strong> <?php echo $row["job_title"]; ?></p>
						<p><strong>What was your reason for leaving?</strong></p>
						<p><?php echo $row["exit_reason"]; ?></p>
						<p><strong>1. I had the opportunity to do challenging work: </strong> <?php echo $row["question_one"]; ?></p>
						<p><strong>2. My job made good use of my skills: </strong> <?php echo $row["question_two"]; ?></p>
						<p><strong>3. I was satisfied with my opportunity to develop new skills: </strong> <?php echo $row["question_three"]; ?></p>
						<p><strong>4. I felt encourage to come up with better ways of doing things: </strong> <?php echo $row["question_four"]; ?></p>
						<p><strong>5. I was satisfied with my opportunity to get a better job in the dealership: </strong> <?php echo $row["question_five"]; ?></p>
						<p><strong>6. I felt well informed about what was expected in my job: </strong> <?php echo $row["question_six"]; ?></p>
						<p><strong>7. I was satisfied with the recognition I recieved for doing a good job: </strong> <?php echo $row["question_seven"]; ?></p>
						<p><strong>8. I was satisfied with the cooperation and communication between my coworkers: </strong> <?php echo $row["question_eight"]; ?></p>
						<p><strong>9. My supervisor was considerate of my need to balance work and person life: </strong> <?php echo $row["question_nine"]; ?></p>
						<p><strong>10. I received ongoing feedback that helped me improve my performance: </strong> <?php echo $row["question_ten"]; ?></p>
						<p><strong>11. Overall, I fell my supervisor did a good job: </strong> <?php echo $row["question_eleven"]; ?></p>
						<p><strong>12. I would recommend Hutson Inc. as a good place to work: </strong> <?php echo $row["question_twelve"]; ?></p>
						<p><strong>Why or why not?</strong></p>
						<p><?php echo $row["why"]; ?></p>
						<p><strong>13. How would you rate the total compensation and benfit package your received whil working at Hutson Inc. (Salary, Health Benefits, Vacation,/Holidays, Retirement Program)? </strong> <?php echo $row["question_thirteen"]; ?></p>
						<p><strong>What did you like most about working for Hutson Inc?</strong></p>
						<p><?php echo $row["what_did_you_like"]; ?></p>
						<p><strong>What did you like least about working for Hutson Inc?</strong></p>
						<p><?php echo $row["what_did_you_like_least"]; ?></p>
						
						<!-- Add back in Version 2
						<a class="waves-effect waves-light btn" id="download-pdf"><i class="material-icons">play_for_work</i> Download</a>
						-->
					</span>
				</div>
			</li>
	

        <?php
    		}
		} else {
    		echo "0 results";
		}
		
		$conn->close();
		?>

		</ul>
	</div>
</main>


        
<script type="text/javascript">

	$( "#download-pdf" ).click(function() {
  		$.ajax({
  			url: "something.php",
  			success: function(result){
       			console.log(result);
    		}
    	});
	});


</script>



<?php include 'includes/footer.php';  ?>