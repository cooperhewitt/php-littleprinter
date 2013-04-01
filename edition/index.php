<?php

	// This is where all the important stuff happens.
	// Refer to http://remote.bergcloud.com/developers/reference/edition for help

	require_once("../framework.php"); // Include the framework
	require_once("../config.php"); // Include the framework

	// The /edition endpoint requires an ETag to be sent.
	// This function sends an md5 string based on how frequently your publication changes

	// The params are as follows:
	//	1: changes every day
	//	2: changes every week
	//	3: changes every month
	//	4: different every time

//	eTag(1);
//	charset();

	// This must be be the first line of code on this page, otherwise you'll get a 'headers not sent' error

	// Now include the header
	// You can pass paramaters into here in an array and they will be available in header.php for use.
	makeHeader();

	// Put your code under here:
	?>
		<img src="http://media.cooperhewitt.org.s3.amazonaws.com/2013/03/01/Top-Banner.png"/>
		<div class="TMSContent">Text pulled from TMS gets inserted here. The text would be the description field for the object.</div>
		<div class="ObjShortURL">http://cprhwi.tt/o/2Ds7P</div>
		<div class="SubmitBlurb"><br> SUBMIT YOUR DRAWING<br>TO THE COOPER HEWITT<br>COLLECTION DATABASE VIA<br>TWITTER OR INSTAGRAM #HDDD</div>
		<br>
		<br>
    <?php

/*	print_r($_GET); // Comment out this line. It makes sure you are receiving the params */

	// Now include the footer
	makeFooter();

?>