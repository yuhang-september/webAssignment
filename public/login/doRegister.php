<?php
include '../common/db.php';

$user = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$sql = $conn->prepare("INSERT INTO user (name, password, email) VALUES (?, ?, ?)");
$sql->bind_param("sss", $user, $password, $email);
if ($sql->execute()) {
    $sql = $conn->prepare("SELECT ID FROM USER WHERE name=? and password=?");
    $sql->bind_param("ss", $user, $password);
    $id = $sql->execute();
    header('Location: ../index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql->close();
?>
