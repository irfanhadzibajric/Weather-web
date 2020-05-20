<?php
// Zapocinjanje sesije
session_start();
header("location:index.php");

//Konekcija na bazu i postavljanje parametara 
$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "users");

$name = $_POST["username"];
$pass = $_POST["password"];
$lok = $_POST["location"];

$s = "SELECT * FROM user_data WHERE username = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
// Petlja koja provjerava unesene podatke
if($num == 1){
    header("location:index.php?Invalid2=Korisničko ime je zauzeto!");
}else{
    $reg = "INSERT INTO user_data(username,password,location) values ('$name','$pass','$lok')";
    mysqli_query($con, $reg);
    header("location:index.php?Valid=Registracija uspješna");
}
?>