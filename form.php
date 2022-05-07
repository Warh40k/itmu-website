<?php 
echo $_POST['nraitsa'];
$conn = mysqli_connect('localhost', 'nikita', '252800nz', 'alien') or die('Connection failed: ' . $conn->connect_error);
echo 'Success connection<br>';

print_r($_POST) . "<br><br>";
foreach($_POST as $value) {
    echo $value;
}

?>