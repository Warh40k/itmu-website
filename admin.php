<?php include ("template/header.php") ?>
<?php 

require_once(__DIR__ . '/vendor/autoload.php');
use MathPHP\Statistics\Correlation;


$login = $_GET['login'];
$password = $_GET['password'];

echo "<h1 class=\"promotion\">Данные форм</h1>";

$conn = mysqli_connect('localhost', $login, $password, 'alien') or die('Connection failed: ' . $conn->connect_error);

$sql = mysqli_query($conn, "SELECT * FROM survey");

echo '<table>
<tr><th scope="col">form_id</th>
<th scope="col">fname</th>
<th scope="col">lname</th>
<th scope="col">gender</th>
<th scope="col">country</th>
<th scope="col">age</th>
<th scope="col">service_source</th>
<th scope="col">tariff</th>
<th scope="col">reasons</th>
<th scope="col">satisfaction</th>
<th scope="col">additions</th>
<th scope="col">reccomend</th>
<th scope="col">functions</th>
<th scope="col">design</th>
<th scope="col">characteristics</th>
<th scope="col">max_price</th>
<th scope="col">min_price</th>
<th scope="col">advert</th></tr>';

while ($result = mysqli_fetch_array($sql)) {
    $i = 0;
    echo "<tr>";
    while($i < mysqli_field_count($conn)) {
        echo "<td>" . $result[$i] . "</td>";
        $i++;
    } 
    echo "</tr>";
}
echo "</table>";
echo "<h1>Коэффициенты</h1><p>Коэффициент корреляции возраста респондента и предельной стоимости затрат по тарифам";

$tariffs = array("Стартовый", "Стандартный", "Премиум");

foreach($tariffs as $tariff){

    $sql = mysqli_query($conn, "SELECT age,max_price FROM survey WHERE tariff='$tariff'");

    $age = array();
    $max_price = array();

    while ($result = mysqli_fetch_array($sql)) {
        $age[] = $result[0];
        $max_price[] = $result[1];
    }

    $pierson = Correlation::r($age,$max_price);
    echo "<p> Коэффициент корреляции Пирсона для тарифа '$tariff' равен " . $pierson . "</p>";

}

?>
<?php include ("template/footer.php") ?>