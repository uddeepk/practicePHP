<?php
  $name = "Uddeep Karki";
  $education_history = array (
		     "BSc CS and Math, UAF expected graduation Dec 2023",
		     "81 credits, Southeastern Louisiana University, Aug 2013 - Dec 2015"
		     );
  $work_history = array (
  		"Assistant Web Developer, UAF eCampus, Feb 2021 - Present",
		"Infantry, US Army, May 2016 - Dec 2020",
		"Event Staff Student Worker, Southeastern Louisiana University, Aug 2015- Jan 2016",
		"Student Parking Enforcer, Southeastern Louisiana University, October 2013- May 2015"
		);
  print "<h2>$name</h2>";
  print "<h3>Work History</h3>";
  foreach($work_history as $w)
  {
	print "$w<br />";
  }
  print "<h3>Education History</h3>";
  foreach($education_history as $ed)
  {
	print "$ed<br />";
  }
	
?>