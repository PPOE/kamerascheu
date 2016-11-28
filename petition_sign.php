<?php

echo "<!-- ";
print_r($_POST);
echo " --> ";

$inputName = $_POST['inputName'];
$inputEmail = $_POST['inputEmail'];
$inputAdresse = $_POST['inputAdresse'];
$inputOrt = $_POST['inputOrt'];
$inputLand = $_POST['inputLand'];

$inputAnonym = 0;
if (isset($_POST['inputAnonym']))
{
  $inputAnonym = 1;
}

if (strlen($_POST['email'])>0)
{
  // spam, no human would fill in this field
  echo "nt";
  exit();
}

require_once("mysqlconn.php");

if (strlen($inputName)<4)
{
  $error = 1;  
}

if (!($stmt = $mysqli->prepare("INSERT INTO unterzeichner(name, email, ort, adresse, land, anonym) VALUES (?, ?, ?, ?, ?, ?)"))) {
     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
     $error = 1;
}

$stmt->bind_param("ssssss", $inputName, $inputEmail, $inputOrt, $inputAdresse, $inputLand, $inputAnonym);


if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    $error = 1;
}

if (!$error)
{
  echo "<h2>Vielen Dank für Ihre Unterstützung!</h2>";
  echo "<p><a href='http://www.kamerascheu.at' title='zu kamerascheu.at' >zurück zur Website</a></p>";
}

$mysqli->close();


?>