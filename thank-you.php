<?php
include 'includes/header.php';

// Connection to SQL
require 'connection/connection.php';

// Sanatize the data
$first_name              = mysql_real_escape_string($_POST['first_name']);
$last_name               = mysql_real_escape_string($_POST['last_name']);
$job_title               = mysql_real_escape_string($_POST['job_title']);
$location                = mysql_real_escape_string($_POST['location']);
$exit_reason             = mysql_real_escape_string($_POST['exit_reason']);
$question_one            = mysql_real_escape_string($_POST['question_one']);
$question_two            = mysql_real_escape_string($_POST['question_two']);
$question_three          = mysql_real_escape_string($_POST['question_three']);
$question_four           = mysql_real_escape_string($_POST['question_four']);
$question_five           = mysql_real_escape_string($_POST['question_five']);
$question_six            = mysql_real_escape_string($_POST['question_six']);
$question_seven          = mysql_real_escape_string($_POST['question_seven']);
$question_eight          = mysql_real_escape_string($_POST['question_eight']);
$question_nine 			 = mysql_real_escape_string($_POST['question_nine']);
$question_ten            = mysql_real_escape_string($_POST['question_ten']);
$question_eleven         = mysql_real_escape_string($_POST['question_eleven']);
$question_twelve         = mysql_real_escape_string($_POST['question_twelve']);
$why                     = mysql_real_escape_string($_POST['why']);
$question_thirteen       = mysql_real_escape_string($_POST['question_thirteen']);
$what_did_you_like       = mysql_real_escape_string($_POST['what_did_you_like']);
$what_did_you_like_least = mysql_real_escape_string($_POST['what_did_you_like_least']);

// Posting to SQL
$sql = "INSERT INTO exitsurvey_answers (first_name, last_name, job_title, location, exit_reason, question_one, question_two, question_three, question_four, question_five, question_six, question_seven, question_eight, question_nine, question_ten, question_eleven, question_twelve, why, question_thirteen, what_did_you_like, what_did_you_like_least) VALUES ('$first_name', '$last_name', '$job_title', '$location', '$exit_reason', '$question_one', '$question_two', '$question_three', '$question_four', '$question_five', '$question_six', '$question_seven', '$question_eight', '$question_nine', '$question_ten', '$question_eleven', '$question_twelve', '$why', '$question_thirteen', '$what_did_you_like', '$what_did_you_like_least')";

mysqli_close($conn);

?>

<nav>
	<div class="nav-wrapper">
		<a href="#" class="brand-logo center">Hutson Inc Exit Survey</a>
	</div>
</nav>

<div class="container">
	<p class="flow-text">Thank you for taking time to complete the survey, <strong><?php echo $first_name; ?></strong>. We appreciate your feedback.</p>
</div>


<?php
include 'includes/footer.php';
?>
