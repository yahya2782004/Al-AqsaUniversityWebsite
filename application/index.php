<?php
//Handling Dynammic webpages
$allowed_pages = [
  'body_ContactDetails'                      => 'body_ContactDetails',
  'body_CourseChoice'   => 'body_CourseChoice.php',
  'body_education'  => 'body_education.php',
];

$p = $_GET['page'] ?? 'body_PersonalDetails'; //home is the default

if (array_key_exists($p, $allowed_pages)) {
  $page_file = $allowed_pages[$p];
} else {
  $page_file = 'body_404.php';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alaqsa University</title>
  <meta name="keywords" content="alaqsa university, undergraduate, postgraduate, registration">
  <meta name="description" content="Alaqsa University web site">
  <link href="../css/stylesheet.css" rel="stylesheet" type="text/css" />

  <script type="text/javascript" src="validation.js"></script>
  
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>

<body>

  <?php include('appHeader.php'); ?>

  <div id="App">

    <?php if (file_exists($p . '.php')) {
      include($p . '.php');
    } else {
      include('body_PersonalDetails.php');
    } ?>

  </div>

  <?php include __DIR__ . '/../partials/footer.php'; ?>

</body>

</html>