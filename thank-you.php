<?php
include 'includes/header.php';

// Connection to SQL
require 'connection/connection.php';

// Sanatize the data
$first_name              = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name               = mysqli_real_escape_string($conn, $_POST['last_name']);
$job_title               = mysqli_real_escape_string($conn, $_POST['job_title']);
$location                = mysqli_real_escape_string($conn, $_POST['location']);
$exit_reason             = mysqli_real_escape_string($conn, $_POST['exit_reason']);
$question_one            = mysqli_real_escape_string($conn, $_POST['question_one']);
$question_two            = mysqli_real_escape_string($conn, $_POST['question_two']);
$question_three          = mysqli_real_escape_string($conn, $_POST['question_three']);
$question_four           = mysqli_real_escape_string($conn, $_POST['question_four']);
$question_five           = mysqli_real_escape_string($conn, $_POST['question_five']);
$question_six            = mysqli_real_escape_string($conn, $_POST['question_six']);
$question_seven          = mysqli_real_escape_string($conn, $_POST['question_seven']);
$question_eight          = mysqli_real_escape_string($conn, $_POST['question_eight']);
$question_nine 			 = mysqli_real_escape_string($conn, $_POST['question_nine']);
$question_ten            = mysqli_real_escape_string($conn, $_POST['question_ten']);
$question_eleven         = mysqli_real_escape_string($conn, $_POST['question_eleven']);
$question_twelve         = mysqli_real_escape_string($conn, $_POST['question_twelve']);
$why                     = mysqli_real_escape_string($conn, $_POST['why']);
$question_thirteen       = mysqli_real_escape_string($conn, $_POST['question_thirteen']);
$what_did_you_like       = mysqli_real_escape_string($conn, $_POST['what_did_you_like']);
$what_did_you_like_least = mysqli_real_escape_string($conn, $_POST['what_did_you_like_least']);

// Posting to SQL
$sql = "INSERT INTO exitsurvey_answers (first_name, last_name, job_title, location, exit_reason, question_one, question_two, question_three, question_four, question_five, question_six, question_seven, question_eight, question_nine, question_ten, question_eleven, question_twelve, why, question_thirteen, what_did_you_like, what_did_you_like_least) VALUES ('$first_name', '$last_name', '$job_title', '$location', '$exit_reason', '$question_one', '$question_two', '$question_three', '$question_four', '$question_five', '$question_six', '$question_seven', '$question_eight', '$question_nine', '$question_ten', '$question_eleven', '$question_twelve', '$why', '$question_thirteen', '$what_did_you_like', '$what_did_you_like_least')";

if(mysqli_query($conn, $sql)){
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($conn);

?>

<nav>
	<div class="nav-wrapper green darken-4">
		<a href="#" class="brand-logo center">Hutson Inc Exit Survey</a>
	</div>
</nav>

<div class="container">
	<p class="flow-text">Thank you for taking time to complete the survey, <strong><?php echo $first_name; ?></strong>. We appreciate your feedback.</p>
</div>


<?php
include 'includes/footer.php';
?>
