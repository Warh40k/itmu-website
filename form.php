<?php 
$conn = mysqli_connect('localhost', 'nikita', '252800', 'alien') or die('Connection failed: ' . $conn->connect_error);
echo 'Success connection';

if (isset($_POST["name"])) {
    echo('<p>Data succesfully inserted in table</p>');
}
?>