<?php
include 'session_details.php';
require_login($logged_in);
include 'header.php';
?>
<h3>This is the account page</h3>
<p>Containing cool stuff</p>
<p>This page can only be viewed if you are logged in as a user.</p>
<?php
include 'footer.php'
?>