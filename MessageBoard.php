<!-- Exercise from Ch. 6 -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Message Board</title>
	<?php
	    if((!file_exists("MessageBoard/messages.txt")) || (filesize("MessageBoard/messages.txt") == 0)){
	    	echo "<p>Sorry,there are no messages posted.</p>\n";

	    }// if branch
	    else{
	    	$MessageArray = file("MessageBoard/message.txt");
	    	echo "<table style=\"background-color: lightgray;\" border=\"1\" width=\"100%\">\n"
	    	$count = count($MessageArray);
	    	// a for loop to work with each individual message in the array
	    	for($i = 0; $i < $count; ++$i) {
	    		$CurrMsg = explode("~" $MessageArray[$i]);

	    		echo "<tr>\n";

	    	}//end of loop 

	    }//else branch

	?>
	<p><a href="PostMessage.php">Post New Message</a></p>
</head>
<body>

</body>
</html>