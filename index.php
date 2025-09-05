<?php
//Handling Dynammic webpages
$allowed_pages = [
    'home'                      => 'body_index.php',
    'registration_howToApply'   => 'registration_howToApply.php',
    'registration_tuitionFees'  => 'registration_tuitionFees.php',
    'registration_AZcourses'    => 'registration_AZcourses.php',
    'registration_enquiries'    => 'registration_enquiries.php',
    'contact'                   => 'body_contact.php'
];
//get the page name
$p = $_GET['page'] ?? 'body_index'; //home is the default

//check if it is one of allowed files
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
    <link rel="stylesheet" href="css/stylesheet.css" title="default">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>

    <!-- Header Section -->
    <?php include __DIR__ . '/partials/header.php'; ?>

    <!-- Hero Section (banner or main visual) -->
    <?php include __DIR__ . '/partials/hero.php'; ?>

    <!-- Body Content -->

    <?php
    // Check if the requested file physically exists
    if (file_exists($p . '.php')) {
        include($p . '.php');
    } 
    else {
        include('body_index.php');
    } 
    ?>

    <!-- Footer Section -->
    <?php include __DIR__ . '/partials/footer.php'; ?>

</body>
</html>