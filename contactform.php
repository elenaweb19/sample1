<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$mailto = "19061292@students.ncclondon.ac.uk";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
	mail($mailto, $subject, $txt, $headers);
	header("Location: file://pl-file-1.students.ncclondon.ac.uk/students/19061292/Documents/L3%20-%20Poplar/Unit%2015%20-%20Altaf/test/property%20thank%20you/thankyoupage.html?mailsend");
}