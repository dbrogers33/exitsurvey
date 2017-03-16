<?php
include 'includes/header.php';
require 'connection/connection.php';
?>

<ul id="slide-out" class="side-nav fixed">
      <li><a href="#!">Individual Results</a></li>
      <li><a href="#!">By Location Results</a></li>
      <li><a href="#!">By Job Title</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>




<main>
	<div class="container">
		<ul class="collapsible" data-collapsible="accordion">
			<li>
				<div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
				<div class="collapsible-body"><span>Paragraph about the survey. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">place</i>Second</div>
				<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
				<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
			</li>
		</ul>
	</div>
</main>
        


<script>

$(document).ready(function () {

	$(document).ready(function(){
    	$('.collapsible').collapsible();
  	});

 	$('.button-collapse').sideNav({
     	menuWidth: 300, // Default is 300
     	edge: 'left', // Choose the horizontal origin
     	closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
     	draggable: true // Choose whether you can drag to open on touch screens
    }
  );
});
        
</script>

<?php include 'includes/footer.php';  ?>