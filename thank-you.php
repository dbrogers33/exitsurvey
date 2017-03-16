<?php
include 'includes/header.php';

// Connection to SQL
include 'connection/connecton.php';

// Posting to SQL
mysqli_query($conn,"INSERT INTO posts (category, title, contents, tags)
VALUES ('$_POST[post_category]', '$_POST[post_title]', '$_POST[post_contents]', '$_POST[post_tags]')";
?>


<?php
include 'includes/footer.php';
?>
