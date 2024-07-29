<?php
include '../common/db.php';

$user = $_POST["username"];
$password = $_POST["password"];
$sql = $conn->prepare("SELECT ID FROM USER WHERE name=? and password=?");
$sql->bind_param("ss", $user, $password);
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['ID'];
    header('Location: ../list/list.php?id='. urlencode($id));
} else {
    header('Location: ../index.php?errorMessage=Please check your username and password.');
}
$sql->close();
?>