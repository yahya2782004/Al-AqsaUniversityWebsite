<?php
//Handling Dynammic webpages
$allowed_pages = [
    'body_index'                => 'body_index.php',
    'body_aboutUs'              => 'body_aboutUs.php',
    'body_undergraduate'        => 'body_undergraduate.php',
    'body_postgraduate'         => 'body_postgraduate.php',
    'registration_howToApply'   => 'registration_howToApply.php',
    'body_contactUs'            => 'body_contact.php',
    'body_Accessibility'        => 'body_Accessibility.php',
    'body_privacy'              => 'body_privacy.php',
    'registration_AZcourses'    => 'registration_AZcourses.php',
    'registration_tuitionFees'  => 'registration_tuitionFees.php',
    'registration_enquiries'    => 'registration_enquiries.php',
    'body_404'                  => 'body_404.php' // add 404 page
];

$p = $_GET['page'] ?? 'body_index'; //home is the default

//print_r($_GET);
if (!array_key_exists($p, $allowed_pages)) {
    $p='body_404';
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
    <link rel="stylesheet" href="css/stylesheet.css" title="default">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>

    <?php include __DIR__ . '/partials/header.php'; ?>

    <?php include __DIR__ . '/partials/hero.php'; ?>

    <?php 
    
    if (file_exists($p . '.php')) {
        include($p . '.php'); 
    } 
    else {
        include('body_404.php');
    } 
    ?>

    <?php include __DIR__ . '/partials/footer.php'; ?>

</body>

</html>

