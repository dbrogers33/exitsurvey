<?php 
include 'includes/header.php';  
?>

<nav>
	<div class="nav-wrapper">
		<a href="#" class="brand-logo">Hutson Inc Exit Survey</a>
	</div>
</nav>

<div class="container">

<!-- FORM -->
<div class="row">
	<form class="col s12">
		
		<div class="row">
			<div class="input-field col s6">
				<input id="first_name" type="text" class="validate">
				<label for="first_name">First Name</label>
			</div>
			<div class="input-field col s6">
				<input id="last_name" type="text" class="validate">
				<label for="last_name">Last Name</label>
			</div>
		</div>

		<div class="row">
			
			<div class="input-field col s6">
				<input type="text" id="autocomplete-input" class="autocomplete">
				<label for="autocomplete-input">Job Title</label>
			</div>



			<div class="input-field col s6">
			    <select>
			    	<option value="" disabled selected="">Choose your store location</option>
					<option value="0">Murray</option>
					<option value="1">Mayfield</option>
					<option value="2">Princeton</option>
					<option value="3">Russellville</option>
					<option value="3">Morganfield</option>
					<option value="3">Morganfield</option>
					<option value="3">Clarksville</option>
					<option value="3">Clinton</option>
					<option value="3">Cypress</option>
					<option value="3">Paducah</option>
					<option value="3">Hopkinsville</option>
					<option value="3">Jasper</option>
					<option value="3">Evansville</option>
					<option value="3">Poseyville</option>
					<option value="3">Newberry</option>
			    </select>
			    <label>Store Location</label>
			</div>
		</div>
		
		<div class="row">
			<div class="input-field col s12">
				<textarea id="exit_reason" class="materialize-textarea"></textarea>
				<label for="exit_reason">Reason for leaving</label>
			</div>
		</div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>1. I had the opportunity to do challenging work:</p>
				<p>
					<input class="with-gap" name="question_one" type="radio" id="agree_1" />
					<label for="agree_1">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_one" type="radio" id="neutral_1" />
					<label for="neutral_1">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_one" type="radio" id="disagree_1"  />
					<label for="disagree_1">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>2. My job made good use of my skills:</p>
				<p>
					<input class="with-gap" name="question_two" type="radio" id="agree_2" />
					<label for="agree_2">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_two" type="radio" id="neutral_2" />
					<label for="neutral_2">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_two" type="radio" id="disagree_2"  />
					<label for="disagree_2">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>3. I was satisfied with my opportunity to develop new skills:</p>
				<p>
					<input class="with-gap" name="question_three" type="radio" id="agree_3" />
					<label for="agree_3">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_three" type="radio" id="neutral_3" />
					<label for="neutral_3">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_three" type="radio" id="disagree_3"  />
					<label for="disagree_3">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>4. I felt encourage to come up with better ways of doing things:</p>
				<p>
					<input class="with-gap" name="question_four" type="radio" id="agree_4" />
					<label for="agree_4">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_four" type="radio" id="neutral_4" />
					<label for="neutral_4">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_four" type="radio" id="neutral_4"  />
					<label for="neutral_4">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>5. I was satisfied with my opportunity to get a better job in the dealership:</p>
				<p>
					<input class="with-gap" name="question_five" type="radio" id="agree_5" />
					<label for="agree_5">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_five" type="radio" id="neutral_5" />
					<label for="neutral_5">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_five" type="radio" id="disagree_5"  />
					<label for="disagree_5">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>6. I felt well informed about what was expected in my job:</p>
				<p>
					<input class="with-gap" name="question_six" type="radio" id="agree_6" />
					<label for="agree_6">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_six" type="radio" id="neutral_6" />
					<label for="neutral_6">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_six" type="radio" id="disagree_6"  />
					<label for="disagree_6">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>7. I was satisfied with the recognition I recieved for doing a good job:</p>
				<p>
					<input class="with-gap" name="question_seven" type="radio" id="agree_7" />
					<label for="agree_7">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_seven" type="radio" id="neutral_7" />
					<label for="neutral_7">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_seven" type="radio" id="disagree_7"  />
					<label for="disagree_7">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>8. I was satisfied with the cooperation and communiction between my coworkers:</p>
				<p>
					<input class="with-gap" name="question_eight" type="radio" id="agree_8" />
					<label for="agree_8">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_eight" type="radio" id="neutral_9" />
					<label for="neutral_9">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_eight" type="radio" id="disagree_9"  />
					<label for="disagree_9">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>9. My supervisor was considerate of my need to balance work and personal life:</p>
				<p>
					<input class="with-gap" name="question_nine" type="radio" id="test1" />
					<label for="test1">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_nine" type="radio" id="test2" />
					<label for="test2">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_nine" type="radio" id="test3"  />
					<label for="test3">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>10. I received ongoing feedback that helped me improve my performance:</p>
				<p>
					<input class="with-gap" name="question_ten" type="radio" id="test1" />
					<label for="test1">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_ten" type="radio" id="test2" />
					<label for="test2">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_ten" type="radio" id="test3"  />
					<label for="test3">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>11. Overall, I fell my supervisor did a good job:</p>
				<p>
					<input class="with-gap" name="question_eleven" type="radio" id="agree_11" />
					<label for="agree_11">Agree</label>
				</p>
				<p>
					<input class="with-gap" name="question_eleven" type="radio" id="neutral_11" />
					<label for="neutral_11">Neutral</label>
				</p>
				<p>
					<input class="with-gap" name="question_eleven" type="radio" id="disagree_11"  />
					<label for="disagree_11">Disagree</label>
				</p>
        	</div>
        </div>

        <div class="row">
        	<div class="input-field col s12">
        		<p>12. I would recommend Hutson Inc. as a good place to work:</p>
				<p>
					<input class="with-gap" name="question_twelve" type="radio" id="yes_12" />
					<label for="yes_12">Yes</label>
				</p>
				<p>
					<input class="with-gap" name="question_twelve" type="radio" id="no_12" />
					<label for="no_12">No</label>
				</p>
        	</div>
        </div>

        <div class="row">
			<div class="input-field col s12">
				<textarea id="why" class="materialize-textarea"></textarea>
				<label for="why">Why or why not:</label>
			</div>
		</div>

		<div class="row">
        	<div class="input-field col s12">
        		<p>13. How would you rate the total compensation & benefit package you received while working at Hutson In (Salary, Health Benefits, Vacation/Holidays, Retirement Program)?</p>
				<p>
					<input class="with-gap" name="question_thirteen" type="radio" id="below_average_13" />
					<label for="below_average_13">Below Average</label>
				</p>
				<p>
					<input class="with-gap" name="question_thirteen" type="radio" id="average_13" />
					<label for="average_13">Average</label>
				</p>
				<p>
					<input class="with-gap" name="question_thirteen" type="radio" id="above_average_13" />
					<label for="above_average_13">Above Average</label>
				</p>
        	</div>
        </div>

        <div class="row">
			<div class="input-field col s12">
				<textarea id="what_did_you_like" class="materialize-textarea"></textarea>
				<label for="what_did_you_like">What did you like most about working for Hutson Inc:</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<textarea id="what_did_you_like_least" class="materialize-textarea"></textarea>
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