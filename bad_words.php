 <?php 


$nome = $_POST["nome"];
$password = $_POST["password"];

$milestone1 = "
<h5>
I dati sono: " . $nome . " " . strlen($nome) . " e " . $password . " " . strlen($password) . "</h5>" ."<br>";

echo $milestone1;

$milestone2 = "$nome" . " " . strlen($nome) . " e " . str_replace("$password", "****", $password) . " " . strlen($password);

echo $milestone2;

?>