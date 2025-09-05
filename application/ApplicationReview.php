<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>University of Hull</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="stylesheet.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript">

function validate_form(direction) {

	if(direction == 1){
		window.location= "PersonalDetails.php";
	}
	else if(direction == 2){
		window.location= "ContactDetails.php";
	}
	else if(direction == 3){
			window.location= "CourseChoice.php";
	}
	else if(direction == 4){
		window.location= "education.php";
	}		
}

function isDeclared(theForm) {
	if (!theForm.declaration.checked) {
		//box is not checked
		alert("Error: You must check the declaration box!");
		return false;
	}
	return true;
}


</script>

</head>
<?php  $p = $_GET['page'];   ?>
<body>
<div id="header">
<?php include('header.php'); ?>
</div>
<div id="separator"></div>
<div id="back"><b>You
are here:</b><a href="index.php">Home</a>
&gt; <a href="registration.php">Registration</a>
&gt; Application Form
</div>
<div id="App">
<?php if(file_exists($p.'.php')) { include($p.'.php'); } else { include('body_declaration.php'); } ?>
</div>
<div id="separator"></div>
<div id="footer">
<?php include('footer.php'); ?>
</div>
</body>
</html>
