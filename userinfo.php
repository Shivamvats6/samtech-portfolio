<?php
$con = mysqli_connect('localhost', 'root');
if ($con) {
    echo "Connection successful.";
} else {
    echo "Connection failed.";
}

mysqli_select_db($con, 'newwebsite',);

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfo (username, email, mobile, comments)
values ('$user',  '$email', '$mobile', '$comments')";



mysqli_query($con, $query);
