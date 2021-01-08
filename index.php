<?php

  // Les informations de login

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["message1"])) {
    $message1Err = "Vous n'avez pas mis de message !";
  } else {
    $message1f = $_POST["message1"];
    $sql = "INSERT INTO msg (message) VALUES ('$message1f')";
    if ($conn->query($sql) === TRUE) {
      $message1Err = "Message Envoye !";
    }
    $conn->close();
}}
?>

<!DOCTYPE html>
<html>
<head>
<title>LittleJackall Request</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
<center><h1>LittleJackall Request</h1></center>
<center><h2>Met ce que tu aimerais developper et je le ferais !</h2></center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<center><h3>Name:</h3> <textarea class="form-control" id="comment" row="20" type="text" name="message1"></textarea></center>
<center><span class="error">* <?php echo $message1Err;?></span></center>
<center><input type="submit" name="submit" value="Submit"></center>
</form>
</body>
</html>
