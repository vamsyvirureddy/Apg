<?php

header('content-type:text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"  ?>';


echo '<response>'
     $food= $_GET[food];
	 $foodArray = array('chicken','mutton','fish','veg','burger');
	 if(in_array($food,$foodArray))
		 echo 'we do have' .$food.'!';
	 elseif($food=='')
	 echo 'enter some food';
	 else
		  echo 'we dont have' .$food.'!';

echo '</response>'
?>