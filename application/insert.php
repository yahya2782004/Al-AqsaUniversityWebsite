<?php
session_start();
require_once "pdoConnect.php";

// Safely read POST values
$gender         = $_POST['gender']         ?? '';
$firstname      = $_POST['firstname']      ?? '';
$lastname       = $_POST['lastname']       ?? '';
$day            = $_POST['day']            ?? '';
$month          = $_POST['month']          ?? '';
$year           = $_POST['year']           ?? '';
$dob            = trim("$day $month $year");

$nationality    = $_POST['nationality']    ?? '';
$specialneeds   = $_POST['specialneeds']   ?? '';
$status         = $_POST['status']         ?? '';
$addresscountry = $_POST['addresscountry'] ?? '';
$address1       = $_POST['address1']       ?? '';
$address2       = $_POST['address2']       ?? '';
$city           = $_POST['city']           ?? '';
$postcode       = $_POST['postcode']       ?? '';
$phone          = $_POST['phone']          ?? '';
$fax            = $_POST['fax']            ?? '';
$email          = $_POST['email']          ?? '';
$coursetype     = $_POST['coursetype']     ?? '';
$coursemode     = $_POST['coursemode']     ?? '';
$program        = $_POST['program']        ?? '';
$fund           = $_POST['fund']           ?? '';
$uniname        = $_POST['uniname']        ?? '';
$unicountry     = $_POST['unicountry']     ?? '';
$level          = $_POST['level']          ?? '';
$title          = $_POST['title']          ?? '';
$length         = $_POST['length']         ?? '';
$other          = $_POST['other']          ?? '';
$declaration    = isset($_POST['declaration']) ? 1 : 0; // checkbox

// NOTE: add 'declaration' column to studentdb if you want to store it.
// If your table doesn't have it, remove $declaration and the last ? and 'i' below.

$sql = "INSERT INTO studentdb
(gender, firstname, lastname, dob, nationality, specialneeds, status, addresscountry,
 address1, address2, city, postcode, phone, fax, email, coursetype, coursemode, program, fund,
 uniname, unicountry, level, title, length, other, declaration)
VALUES
(:gender, :firstname, :lastname, :dob, :nationality, :specialneeds, :status, :addresscountry,
 :address1, :address2, :city, :postcode, :phone, :fax, :email, :coursetype, :coursemode, :program, :fund,
 :uniname, :unicountry, :level, :title, :length, :other, :declaration)";


try {
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':gender'         => $gender,
        ':firstname'      => $firstname,
        ':lastname'       => $lastname,
        ':dob'            => $dob,
        ':nationality'    => $nationality,
        ':specialneeds'   => $specialneeds,
        ':status'         => $status,
        ':addresscountry' => $addresscountry,
        ':address1'       => $address1,
        ':address2'       => $address2,
        ':city'           => $city,
        ':postcode'       => $postcode,
        ':phone'          => $phone,
        ':fax'            => $fax,
        ':email'          => $email,
        ':coursetype'     => $coursetype,
        ':coursemode'     => $coursemode,
        ':program'        => $program,
        ':fund'           => $fund,
        ':uniname'        => $uniname,
        ':unicountry'     => $unicountry,
        ':level'          => $level,
        ':title'          => $title,
        ':length'         => $length,
        ':other'          => $other,
        ':declaration'    => $declaration,
    ]);

    $_SESSION['id'] = $pdo->lastInsertId();
  
    // show the confirmation page
    require __DIR__ . '/display.php';

} catch (PDOException $e) {
    die('DB error: ' . $e->getMessage());
}
