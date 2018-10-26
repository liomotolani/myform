<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $POST["password"];
$phonenumber = $_POST["phone_number"];
$gender = $_POST["gender"];
$country = $_POST["country"];
saveToFile($firstname,$lastname,$email,$password,$phonenumber,$gender,$country);
header('Location:success.html');

function saveToFile($firstname, $lastname, $email, $password, $phonenumber, $gender, $country)
{
$fileHandler = fopen("signuprecord.txt", "a");
$string = $firstname .  ","  .$lastname . "," .$email. "," .$password. "," .$phonenumber. "," .$gender. "," .$country. "<br>";
fwrite($fileHandler, $string);
fclose($fileHandler);
}
function saveToDatabase($firstname,$lastname,$email,$password,$phonenumber,$gender,$country)
{
$serverName = "localhost";
$database = "Signup";
$username = "root";
$password = "";

$conn = mysqli_connect($serverName,$username,$password,$database);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
$sql = "INSERT INTO user (firstname,lastname,email,password,phone_number,gender,country)
VALUES ( '$firstname','$lastname','$email','$password','$phonenumber','$gender','$country')";
if (!$result){
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
}
mysqli_close($conn);
}
?>