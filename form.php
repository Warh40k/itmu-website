<?php 
$conn = mysqli_connect('localhost', 'nikita', '252800nz', 'alien') or die('Connection failed: ' . $conn->connect_error);
echo 'Success connection<br>';

print_r($_POST) . "<br><br>";
$stmt=$conn->prepare("INSERT INTO survey (fname,lname) VALUES(?,?)");
$stmt->bind_param('ss',$_POST['firstname'],$_POST['surname']);
$stmt->execute();
echo '<p>Success insertion</p>';
?>