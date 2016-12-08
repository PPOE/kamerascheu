<?php
echo "<!-- ";
print_r($_POST);
echo " --> ";

$inputName = $_POST['inputName'];
$inputEmail = $_POST['inputEmail'];
$inputAdresse = $_POST['inputAdresse'];
$inputOrt = $_POST['inputOrt'];
$inputLand = $_POST['inputLand'];

if (!isset($_POST['inputName'])) {
    $error = 1;
}

$inputAnonym = 0;
if (isset($_POST['inputAnonym'])) {
    $inputAnonym = 1;
}

if (strlen($_POST['email']) > 0) {
    // spam, no human would fill in this field
    echo "nt";
    exit();
}

if (strlen($inputName) < 4) {
    $error = 1;
}

if (!($stmt = $mysqli->prepare("INSERT INTO unterzeichner(name, email, ort, adresse, land, anonym) VALUES (?, ?, ?, ?, ?, ?)"))) {
    echo "Prepare failed: (" . $stmt->errno . ") " . $stmt->error;
    $error = 1;
}

$stmt->bind_param("ssssss", $inputName, $inputEmail, $inputOrt, $inputAdresse, $inputLand, $inputAnonym);


if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    $error = 1;
}

$mysqli->close();

if (!$error) {
    echo "<h2>Vielen Dank für Ihre Unterstützung!</h2>";
    echo "<p><a href='//www.kamerascheu.at' title='zu kamerascheu.at' >zurück zur Website</a></p>";
} else {
    echo "<h2>Ein unvorhergesehener Fehler ist aufgetreten. :(</h2>";
    echo '<p><a href="?t=petition">Zurück</a>.</p>';
}
