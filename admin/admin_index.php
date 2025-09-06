<?php
//DB connection
require_once "../application/pdoConnect.php";

// Read inputs
$action  = $_GET['action']  ?? 'list';      // list | details | delete
$id      = $_GET['id']      ?? '';          // used directly in queries

// Escape helper
function h($s)
{
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alaqsa University DB Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DB Administration of Alaqsa University">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="admin_stylesheet.css">
</head>

<body>
    <div>
        <a href="../index.php"><img src="../images/logo.png" alt="Alaqsa University" height="40"></a>
    </div>
    <small>You are here:<a a href="../index.php">Home</a> » Staff Admin</small>
    <h2>Students Applications</h2>

    <div>
        <?php
        try {
            if ($action === 'details') {

                $stmt = $pdo->prepare("SELECT * FROM studentdb WHERE id=:id");
                $stmt->execute([':id' => $id]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC) ?: [];

                echo "<h3>Details for Student ID: " . h($id) . "</h3>";
                echo '<table class="table details">';
                $labels = [
                    'id' => 'Student ID',
                    'gender' => 'Gender',
                    'firstname' => 'First Name',
                    'lastname' => 'Last Name',
                    'dob' => 'Date of Birth',
                    'nationality' => 'Nationality',
                    'specialneeds' => 'Special Needs',
                    'status' => 'Status',
                    'addresscountry' => 'Address Country',
                    'address1' => 'Address 1',
                    'address2' => 'Address 2',
                    'city' => 'City',
                    'postcode' => 'Post Code',
                    'phone' => 'Phone',
                    'fax' => 'Fax',
                    'email' => 'Email',
                    'coursetype' => 'Course Type',
                    'coursemode' => 'Course Mode',
                    'program' => 'Program',
                    'fund' => 'Self Funded',
                    'uniname' => 'Last University',
                    'unicountry' => 'University Country',
                    'level' => 'Last Level',
                    'title' => 'Last Title',
                    'length' => 'Last Length',
                    'other' => 'Other Information'
                ];
                foreach ($labels as $key => $label) {
                    $val = $key === 'other' ? nl2br(h($row[$key] ?? '')) : h($row[$key] ?? '');
                    echo "<tr><th>" . h($label) . "</th><td>$val</td></tr>";
                }
                echo '</table><br>';
            } 
            elseif ($action === 'delete') {
                $stmt = $pdo->prepare("DELETE FROM studentdb WHERE id=:id");
                $stmt->execute([':id' => $id]);
                echo "<p><strong>Student Deleted: " . h($id) . "</strong></p>";
            } 
            else { // list
                $stmt = $pdo->query("SELECT id, lastname, program FROM studentdb ORDER BY id");
                echo '<table class="table"><tr><th>Student ID</th><th>Last Name</th><th>Course Choice</th><th>Actions</th></tr>';
                while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . h($r['id']) . '</td>';
                    echo '<td>' . h($r['lastname']) . '</td>';
                    echo '<td>' . h($r['program']) . '</td>';
                    echo '<td>
                  <a class="btn" href="?action=details&id=' . h($r['id']) . '">Details</a>
                  <a class="btn" href="?action=delete&id=' . h($r['id']) . '">Delete</a>
                </td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
        } catch (PDOException $e) {
            echo "<p>Database error.</p>";
        }
        ?>
    </div>
</body>

</html>