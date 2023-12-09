<?php
$email = $_POST['email'];
$password = $_POST['password'];
//database connection
$con = new mysqli("localhost","root","","db_user");
if($con->connect_error) {
die("Failed to connect :" .$con->connect_error);
} else {
$stmt = $con->prepare("select * from registration where email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt_result = $stmt->get_result();
if($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if($data['password'] === $password) {
        header('Location: http://tugasku.test/user/user.php');
        } 
        else { 
            echo "<h2>Invalid Email or password</h2>";
}
}
}
?>