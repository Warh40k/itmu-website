<?php 
$conn = mysqli_connect('localhost', 'nikita', '252800nz', 'alien') or die('Connection failed: ' . $conn->connect_error);
echo 'Success connection<br>';

print_r($_POST) . "<br><br>";

//$stmt=$conn->prepare("INSERT INTO survey (fname,lname, gender, country, age, service_source, tariff, reasons) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$reasons = implode($_POST['reasons']);
$function = implode($_POST['function']);
$characteristics = implode($_POST['characteristics']);
echo '<br>' . $reasons;
//$stmt->bind_param('ssssisss', $_POST['firstname'],$_POST['surname'],$_POST['gender'],$_POST['country'],$_POST['age'],$_POST['source'],$_POST['tariff_choice'], $reasons);
$stmt=$conn->prepare("INSERT INTO survey (fname,lname, gender, country, age, service_source, tariff, reasons, satisfaction, recommend, functions, design, characteristics, max_price, min_price, advert) VALUES(?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('ssssisssiisisiis',$_POST['firstname'],$_POST['surname'],$_POST['gender'],$_POST['country'],$_POST['age'],$_POST['source'],$_POST['tariff_choice'], $reasons,$_POST['nraitsa'],$_POST['recommend'], $function,$_POST['design'], $characteristics,$_POST['max_price'],$_POST['min_price'],$_POST['advert']);
$stmt->execute();
echo '<p>Success insertion</p>';
?>