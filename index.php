<?php
include 'includes/header.php';
require 'connection/connection.php';
?>

<nav>
	<div class="nav-wrapper">
		<a href="#" class="brand-logo center">Hutson Inc Exit Survey</a>
	</div>
</nav>

<div class="container">

<div class="row">
	<p>Paragraph about the survey. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<!-- FORM -->
<div class="row">
	<form class="col s12" action="thank-you.php" method="post">

		<div class="row">
			<div class="input-field col s6">
				<input id="first_name" type="text" class="validate" name="first_name">
				<label for="first_name">First Name</label>
			</div>
			<div class="input-field col s6">
				<input id="last_name" type="text" class="validate" name="last_name">
				<label for="last_name">Last Name</label>
			</div>
		</div>

		<div class="row">

			<div class="input-field col s6">
				<input type="text" id="autocomplete-input" class="autocomplete" name="job_title">
				<label for="autocomplete-input">Job Title</label>
			</div>



			<div class="input-field col s6">
			    <select name="location">
			    	<option value="" disabled selected="">Choose your store location</option>
						<option value="Murray">Murray</option>
						<option value="Mayfield">Mayfield</option>
						<option value="Princeton">Princeton</option>
						<option value="Russellville">Russellville</option>
						<option value="Morganfield">Morganfield</option>
						<option value="Clarksville">Clarksville</option>
						<option value="Clinton">Clinton</option>
						<option value="Cypress">Cypress</option>
						<option value="Paducah">Paducah</option>
						<option value="Hopkinsville">Hopkinsville</option>
						<option value="Jasper">Jasper</option>
						<option value="Evansville">Evansville</option>
						<option value="Poseyville">Poseyville</option>
						<option value="Newberry">Newberry</option>
			    </select>
			    <label>Store Location</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<textarea id="exit_reason" class="materialize-textarea" name="exit_reason"></textarea>
				<label for="exit_reason">Reason for leaving</label>
			</div>
		</div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>1. I had the opportunity to do challenging work:</p>
				<p>
					<input class="with-gap" name="question_one" type="radio" id="agree_1" value="agree" />
					<label for="agree_1">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_one" type="radio" id="neutral_1" value="neutral" />
					<label for="neutral_1">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_one" type="radio" id="disagree_1" value="disagree" />
					<label for="disagree_1">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>2. My job made good use of my skills:</p>
				<p>
					<input class="with-gap" name="question_two" type="radio" id="agree_2" value="agree" />
					<label for="agree_2">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_two" type="radio" id="neutral_2" value="neutral" />
					<label for="neutral_2">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_two" type="radio" id="disagree_2" value="disagree" />
					<label for="disagree_2">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>3. I was satisfied with my opportunity to develop new skills:</p>
				<p>
					<input class="with-gap" name="question_three" type="radio" id="agree_3" value="agree" />
					<label for="agree_3">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_three" type="radio" id="neutral_3" value="neutral" />
					<label for="neutral_3">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_three" type="radio" id="disagree_3" value="disagree" />
					<label for="disagree_3">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>4. I felt encourage to come up with better ways of doing things:</p>
				<p>
					<input class="with-gap" name="question_four" type="radio" id="agree_4" value="agree" />
					<label for="agree_4">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_four" type="radio" id="neutral_4" value="neutral" />
					<label for="neutral_4">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_four" type="radio" id="disagree_4" value="disagree" />
					<label for="disagree_4">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>5. I was satisfied with my opportunity to get a better job in the dealership:</p>
				<p>
					<input class="with-gap" name="question_five" type="radio" id="agree_5" value="agree" />
					<label for="agree_5">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_five" type="radio" id="neutral_5" value="neutral" />
					<label for="neutral_5">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_five" type="radio" id="disagree_5" value="disagree"  />
					<label for="disagree_5">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>6. I felt well informed about what was expected in my job:</p>
				<p>
					<input class="with-gap" name="question_six" type="radio" id="agree_6" value="agree" />
					<label for="agree_6">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_six" type="radio" id="neutral_6" value="neutral" />
					<label for="neutral_6">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_six" type="radio" id="disagree_6" value="disagree"  />
					<label for="disagree_6">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>7. I was satisfied with the recognition I recieved for doing a good job:</p>
				<p>
					<input class="with-gap" name="question_seven" type="radio" id="agree_7" value="agree" />
					<label for="agree_7">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_seven" type="radio" id="neutral_7" value="neutral" />
					<label for="neutral_7">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_seven" type="radio" id="disagree_7" value="disagree" />
					<label for="disagree_7">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>8. I was satisfied with the cooperation and communiction between my coworkers:</p>
				<p>
					<input class="with-gap" name="question_eight" type="radio" id="agree_8" value="agree" />
					<label for="agree_8">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_eight" type="radio" id="neutral_8" value="neutral" />
					<label for="neutral_8">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_eight" type="radio" id="disagree_8" value="disagree" />
					<label for="disagree_8">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>9. My supervisor was considerate of my need to balance work and personal life:</p>
				<p>
					<input class="with-gap" name="question_nine" type="radio" id="agree_9" value="agree" />
					<label for="agree_9">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_nine" type="radio" id="neutral_9" value="neutral" />
					<label for="neutral_9">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_nine" type="radio" id="disagree_9" value="disagree"  />
					<label for="disagree_9">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>10. I received ongoing feedback that helped me improve my performance:</p>
				<p>
					<input class="with-gap" name="question_ten" type="radio" id="agree_10" value="agree" />
					<label for="agree_10">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_ten" type="radio" id="neutral_10" value="neutral" />
					<label for="neutral_10">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_ten" type="radio" id="disagree_10" value="disagree" />
					<label for="disagree_10">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>11. Overall, I fell my supervisor did a good job:</p>
				<p>
					<input class="with-gap" name="question_eleven" type="radio" id="agree_11" value="agree" />
					<label for="agree_11">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_eleven" type="radio" id="neutral_11" value="neutral" />
					<label for="neutral_11">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_eleven" type="radio" id="disagree_11" value="disagree" />
					<label for="disagree_11">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>12. I would recommend Hutson Inc. as a good place to work:</p>
				<p>
					<input class="with-gap" name="question_twelve" type="radio" id="yes_12" value="yes" />
					<label for="yes_12">Yes</label>
				</p>
				<p>
					<input class="with-gap" name="question_twelve" type="radio" id="no_12" value="no" />
					<label for="no_12">No</label>
				</p>
        	</div>
        </div>

        <div class="row">
			<div class="input-field col s12">
				<textarea id="why" class="materialize-textarea" name="why"></textarea>
				<label for="why">Why or why not:</label>
			</div>
		</div>

		<div class="row">
        	<div class="input-field col s12">
        		<p>13. How would you rate the total compensation & benefit package you received while working at Hutson In (Salary, Health Benefits, Vacation/Holidays, Retirement Program)?</p>
				<p>
					<input class="with-gap" name="question_thirteen" type="radio" id="below_average_13" value="below average" />
					<label for="below_average_13">Below Average</label>
				</p>
				<p>
					<input class="with-gap" name="question_thirteen" type="radio" id="average_13" value="average" />
					<label for="average_13">Average</label>
				</p>
				<p>
					<input class="with-gap" name="question_thirteen" type="radio" id="above_average_13" value="above average" />
					<label for="above_average_13">Above Average</label>
				</p>
        	</div>
        </div>

        <div class="row">
			<div class="input-field col s12">
				<textarea id="what_did_you_like" class="materialize-textarea" name="what_did_you_like"></textarea>
				<label for="what_did_you_like">What did you like most about working for Hutson Inc:</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<textarea id="what_did_you_like_least" class="materialize-textarea" name="what_did_you_like_least"></textarea>
				<label for="what_did_you_like_least">What did you like least about working for Hutson Inc:</label>
			</div>
		</div>

		<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    		<i class="material-icons right">send</i>
  		</button>
	</form>
</div>
<!-- END FORM -->

</div>

<script type="text/javascript" src="js/bin/job-titles.js"></script>


<?php include 'includes/footer.php';  ?>
