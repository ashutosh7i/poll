<?php 
  // Load the results xml file
  $doc = new DOMDocument();
  $doc->load("xml/results.xml");
  $root = $doc->getElementsByTagName("results")->item(0);
  $question = $root->getAttribute("question");
  echo "<table id=\"tblPoll\" align=\"center\"><tr><td class=\"question\">$question</td></tr>";
  echo "<tr><td class=\"pollitem\">";
  $pollitems = $doc->getElementsByTagName("pollitem");
  $id = 1;
  // Loop through each item, and create a radio button for each item
  foreach( $pollitems as $pollitem )
  {
  	$entries = $pollitem->getElementsByTagName("entryname");
  	$entry = $entries->item(0)->nodeValue;
  	$votes = $pollitem->getElementsByTagName("votes");
  	$vote = $votes->item(0)->nodeValue;
	if ($id==1)
	  	echo "<input id=\"entry$id\" class=\"radiobutton\" onclick=\"setVote('$entry')\" type=\"radio\" name=\"poll\" value=\"$entry\">$entry<br>";
	else
		echo "<input id=\"entry$id\" onclick=\"setVote('$entry')\" type=\"radio\" name=\"poll\" value=\"$entry\">$entry<br>";
	$id = $id + 1;
  }
  echo "</td></tr>";
  echo "</table>";
?>
